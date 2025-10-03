<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $query = Team::query();

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where('name', 'like', "%{$search}%");
        }

        $teams = $query->latest()->paginate(10);

        return view('admin.teams.index', get_defined_vars());
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(StoreTeamRequest $request)
    {
        $validated = $request->validated();

        try {
            // ❌ الصورة ما تتخزن ولا تتدخل
            Team::create([
                'name' => $validated['name'],
                'position' => $validated['position'] ?? null,
                'description' => $validated['description'] ?? null,
                'social_media' => $validated['social_media'] ?? [],
                'image' => '', // نحط قيمة فاضية لأن العمود موجود في DB
            ]);

            return to_route('teams.index')->with('success', 'Team created successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit(string $id)
    {
        $team = Team::findOrFail($id);
        return view('admin.teams.update', get_defined_vars());
    }

    public function update(StoreTeamRequest $request, string $id)
    {
        $validated = $request->validated();

        try {
            $team = Team::findOrFail($id);

            $team->update([
                'name' => $validated['name'],
                'position' => $validated['position'] ?? null,
                'description' => $validated['description'] ?? null,
                'social_media' => $validated['social_media'] ?? [],
                // ❌ الصورة ما نغيرها أبداً
            ]);

            return to_route('teams.index')->with('success', 'Team updated successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return to_route('teams.index')->with('success', 'Team deleted successfully');
    }
}
