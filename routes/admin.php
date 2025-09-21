<?php

use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\PageController;

Route::get('/index',function(){
    return view('admin.index');
});


    Route::resource('services',ServicesController::class);
    Route::resource('features',FeatureController::class);
    Route::resource('pages',PageController::class);

Route::post('/admin/upload-image', [UploadController::class, 'store'])
     ->name('admin.upload-image');
