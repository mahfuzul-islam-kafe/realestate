<?php

use App\Models\Property;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    $properties = Property::with('ad_type','property_type','property_condition','entry_condition')->get();
    dd($properties);
});


