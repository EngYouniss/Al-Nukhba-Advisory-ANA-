<?php

use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\TestmonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\SubscriberController;

Route::get('/index',function(){
    return view('admin.index');
});


    Route::resource('services',ServicesController::class);
    Route::resource('features',FeatureController::class);
    Route::resource('testmonials',TestmonialController::class);
    Route::resource('messages', MessagesController::class)->only(['index','show','destroy']);
    Route::resource('subscribers', SubscriberController::class)->only(['index','destroy']);

