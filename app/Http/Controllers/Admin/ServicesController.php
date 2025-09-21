<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicesRequest;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Services::query();
        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where('title', 'like', "%{$search}%");
        }
        $services = $query->latest()->paginate(10);


        return view('admin.services.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServicesRequest $request)
    {
        $validated = $request->validated();
        try {
            Services::create($validated);
            return to_route('services.index')->with('success', 'Service created successfully');
        } catch (\Exception $exceptions) {
            return back()->with('error', $exceptions->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $service = Services::findBySlug($slug);
        return view('admin.services.update', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreServicesRequest $request, string $slug)
    {
        $validated = $request->validated();
        try {
            $service = Services::findOrFail($slug);
            $service->update($validated);
            return to_route('services.index')->with('success', 'Service updated successfully');
        } catch (\Exception $exceptions) {
            return back()->with('error', $exceptions->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Services::findOrFail($id);
        $service->delete();
        return to_route('services.index')->with('success', 'تم الحذف بنجاح');
    }
}
