<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Faqs;
use App\Http\Requests\StoreFaqsRequest;
use App\Http\Requests\UpdateFaqsRequest;;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Faqs::query();

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where('question', 'like', "%{$search}%");
        }

        $faqs = $query->latest()->paginate(10);

        return view('admin.faqs.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqsRequest $request)
    {
        $validated = $request->validated();

        try {
            Faqs::create($validated);
            return to_route('faqs.index')
                   ->with('success', 'Faqs created successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Faqs $faqs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faq = Faqs::where('id', $id)->firstOrFail();
        return view('admin.faqs.update', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFaqsRequest $request, string $id)
    {
        $validated = $request->validated();

        try {
            $faqs = Faqs::where('id', $id)->firstOrFail();
            $faqs->update($validated);
            return to_route('faqs.index')
                   ->with('success', 'Faqs updated successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faqs = Faqs::findOrFail($id);
        $faqs->delete();

        return to_route('faqs.index')
               ->with('success', 'Faqs deleted successfully');
    }
}
