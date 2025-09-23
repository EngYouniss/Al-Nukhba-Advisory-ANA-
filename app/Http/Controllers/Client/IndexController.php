<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Services;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $services = Services::get();
        $features=Feature::get();

        return view('index',get_defined_vars());
    }
}
