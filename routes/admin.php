<?php

use App\Http\Controllers\Admin\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/index',function(){
    return view('admin.index');
});


    Route::resource('services',ServicesController::class);

