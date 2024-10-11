<?php

use App\Models\Property;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/listing', 'pages.listing');
Route::view('/confidential', 'pages.confidential');

    Route::view('mansion', 'pages.mansion');
Route::view('affordability_calculator', 'pages.affordability_calculator');

Route::get('/test', function () {
    $properties = Property::with('ad_type', 'property_type', 'property_condition', 'entry_condition')->get();
    dd($properties);
});
Auth::routes();
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/register', function () {
    return view('pages.register');
}); 




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
