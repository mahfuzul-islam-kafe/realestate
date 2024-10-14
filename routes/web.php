<?php

use App\Models\Property;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/listing', 'pages.listing');
Route::view('/confidential', 'pages.confidential');

    Route::view('mansion', 'pages.mansion');
Route::view('affordability_calculator', 'pages.affordability_calculator');

Route::get('/test', function () {
      dd('yes this is a test');
});


Auth::routes();

// Route::get('/logout', function (Request $request) {
//     Auth::logout();
//     return redirect('/'); 
// });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
