<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Services;
use App\Models\Testmonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $services = Services::get();
        $features = Feature::get();
        $testmonials = Testmonial::get();


        return view('index', get_defined_vars());
    }
}
