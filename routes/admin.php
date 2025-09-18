<?php

use App\Http\Controllers\Admin\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('admin.index');
});

Route::controller(ServicesController::class)->group(function(){

    Route::resource('services',ServicesController::class);
});
