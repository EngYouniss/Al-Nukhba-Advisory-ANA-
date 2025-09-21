<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $page=Page::limit(1)->latest();
        return view('admin.pages.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $validated = $request->validated();

        try {
            Page::create($validated);
            return to_route('pages.index')
                   ->with('success', 'Page created successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('admin.pages.update', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePageRequest $request, string $slug)
    {
        $validated = $request->validated();

        try {
            $page = Page::where('slug', $slug)->firstOrFail();
            $page->update($validated);
            return to_route('pages.index')
                   ->with('success', 'Page updated successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return to_route('{{ modelVariable | str_plural }}.index')
               ->with('success', 'Page deleted successfully');
    }
}
