<?php

use App\Http\Controllers\Client\FeaturesController;
use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\Client\ServicesController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

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
