<?php

use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\FeaturesController;
use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\Client\ServicesController;
use App\Http\Controllers\Client\SubscribeController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'index');


// Route::view('about','about');
Route::get('/master',function(){
return view('admin.layout.master');
});
Route::get('/about', function () {
    return view('about');
})->name('about');
// Route::get('/services', function () {
//     return view('services');
// })->name('services');


Route::get('/',[IndexController::class,'index'])->name('client.index');
Route::get('/allservices',[ServicesController::class,'index'])->name('client.services');
Route::get('/allfeatures',[FeaturesController::class,'index'])->name('client.features');
Route::post('/subscriber/store',[SubscribeController::class,'store'])->name('subscribe.store');
Route::get('/contact',[ContactController::class,'index'])->name('client.contact.index');
Route::post('/contact',[ContactController::class,'store'])->name('client.contact.store');
