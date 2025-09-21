<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testmonial;
use App\Http\Requests\StoreTestmonialRequest;
use App\Http\Requests\UpdateTestmonialRequest;;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestmonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Testmonial::query();

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where('name', 'like', "%{$search}%");
        }

        $testmonials = $query->latest()->paginate(10);

        return view('admin.testmonials.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testmonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestmonialRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('testmonials', 'public');
        }
        try {
            Testmonial::create($validated);
            return to_route('testmonials.index')
                ->with('success', 'تمت الإضافة بنجاح');
        } catch (\Exception $e) {
            if (!empty($validated['image'])) {
                Storage::disk('public')->delete($validated['image']);
            }
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Testmonial $testmonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $testmonial = Testmonial::where('slug', $slug)->firstOrFail();
        return view('admin.testmonials.update', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreTestmonialRequest $request, string $slug)
    {
        $validated = $request->validated();

        try {
            $testmonial = Testmonial::where('slug', $slug)->firstOrFail();

            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('testmonials', 'public');

                if (!empty($testmonial->image)) {
                    Storage::disk('public')->delete($testmonial->image);
                }
            }

            $testmonial->update($validated);

            return to_route('testmonials.index')
                ->with('success', 'تم التعديل بنجاح');
        } catch (\Exception $e) {
            if (!empty($validated['image'])) {
                Storage::disk('public')->delete($validated['image']);
            }
            return back()->with('error', $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testmonial = Testmonial::findOrFail($id);
        $testmonial->delete();

        return to_route('testmonials.index')
            ->with('success', 'تم الحذف بنجاح');
    }
}
