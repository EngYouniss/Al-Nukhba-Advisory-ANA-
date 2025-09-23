<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
 public function index()
{
    $services = Services::get();

    return view('services')->with('services',$services); // لا تستخدم get_defined_vars()
}
}
