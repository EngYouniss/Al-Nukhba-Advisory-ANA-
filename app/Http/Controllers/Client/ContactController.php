<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Notifications\NewMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'    => 'required|string|max:64',
                'email'   => 'required|email|max:64',
                'subject' => 'required|string|max:64',
                'message' => 'required|string|max:500',
            ]
        );

        $data = $validator->validated();

        $created = Message::create($data);
        $admin = User::find(1);
        $admin->notify(new NewMessageNotification($request->name, $request->email,
         $request->subject, $request->message));
        if ($created) {
            return redirect()->back()->with('success', 'شكراً لتواصلك معنا سيتم الرد قريباً.');
        }

        return redirect()->back()->with('error', 'هناك خطأ حاول مجدداً.');
    }
}
