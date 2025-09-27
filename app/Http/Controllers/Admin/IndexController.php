<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use App\Models\Feature;
use App\Models\Message;
use App\Models\Services;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $services=Services::paginate(5);
        $features=Feature::get();
        $faqs=Faqs::get();
        $messages=Message::latest()->take(3)->get();
        $subscribers=Subscriber::latest()->take(3)->get();
        return view('admin.index',compact(['services','messages','subscribers','features','faqs']));
    }
}
