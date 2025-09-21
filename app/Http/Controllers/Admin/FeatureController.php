<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Http\Requests\StorefeatureRequest;
use App\Http\Requests\UpdatefeatureRequest;

;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Feature::query();

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where('title', 'like', "%{$search}%");
        }

        $features = $query->latest()->paginate(10);

        return view('admin.features.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.features.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(StorefeatureRequest $request)
    {
        $validated = $request->validated();

        try {
            Feature::create($validated);
            return to_route('features.index')
                   ->with('success', 'تمت الإضافة بنجاح');

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(feature $feature)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(string $slug)
    {
        $feature = feature::where('slug', $slug)->firstOrFail();
        return view('admin.features.update', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorefeatureRequest $request, string $id)
    {
        $validated = $request->validated();

        try {
            $feature = Feature::where('id', $id)->firstOrFail();
            $feature->update($validated);
            return to_route('features.index')
                   ->with('success', 'تم التعديل بنجاح');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feature = Feature::findOrFail($id);
        $feature->delete();

        return to_route('features.index')
               ->with('success', 'تم الحذف بنجاح');
    }
}
