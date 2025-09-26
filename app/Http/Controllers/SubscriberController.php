<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;;

use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Subscriber::query();

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where('email', 'like', "%{$search}%");
        }

        $subscribers = $query->latest()->paginate(10);

        return view('admin.subscribers.index', get_defined_vars());
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view('admin.{{ modelVariable | str_plural }}.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(StoreSubscriberRequest $request)
    // {
    //     $validated = $request->validated();

    //     try {
    //         Subscriber::create($validated);
    //         return to_route('{{ modelVariable | str_plural }}.index')
    //                ->with('success', 'Subscriber created successfully');
    //     } catch (\Exception $e) {
    //         return back()->with('error', $e->getMessage());
    //     }
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Subscriber $subscriber)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $slug)
    // {
    //     $subscriber = Subscriber::where('slug', $slug)->firstOrFail();
    //     return view('admin.{{ modelVariable | str_plural }}.update', get_defined_vars());
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(StoreSubscriberRequest $request, string $slug)
    // {
    //     $validated = $request->validated();

    //     try {
    //         $subscriber = Subscriber::where('slug', $slug)->firstOrFail();
    //         $subscriber->update($validated);
    //         return to_route('{{ modelVariable | str_plural }}.index')
    //                ->with('success', 'Subscriber updated successfully');
    //     } catch (\Exception $e) {
    //         return back()->with('error', $e->getMessage());
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();

        return to_route('subscribers.index')
            ->with('success', ' تم الحذف بنجاح ');
    }
}
