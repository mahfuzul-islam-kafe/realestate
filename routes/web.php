<?php

use App\Models\Property;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/confidential', 'pages.confidential');
Route::view('mansion', 'pages.mansion');

Route::get('/test', function () {
    $properties = Property::with('ad_type','property_type','property_condition','entry_condition')->get();
    dd($properties);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
