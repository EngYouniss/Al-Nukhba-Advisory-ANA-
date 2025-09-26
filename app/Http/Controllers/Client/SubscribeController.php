<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use App\Models\User;
use App\Notifications\NewSubscriberNotification;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers,email'
        ]);
        $created =  Subscriber::create($validated);
        if ($created) {
            $user=User::find(1);
            $user->notify(new NewSubscriberNotification($user));
            return to_route('client.index');
        }
    }
}
