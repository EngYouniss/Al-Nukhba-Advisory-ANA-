<?php

namespace App\Http\Controllers;

use App\Models\messages;
use App\Http\Requests\StoremessagesRequest;
use App\Http\Requests\UpdatemessagesRequest;
use App\Models\Message;

;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Message::query();

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where('subject', 'like', "%{$search}%");
        }

        $messages = $query->latest()->paginate(10);

        return view('admin.messages.index', get_defined_vars());
    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message=Message::findOrFail($id);
        return view('admin.messages.show',get_defined_vars());
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $messages = Message::findOrFail($id);
        $messages->delete();

        return to_route('messages.index')
               ->with('success', 'تم الحذف بنجاح');
    }
}
