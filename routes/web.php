<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Models\Property;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'home');

// Route::get('/listings',)
// Route::get('/', [PageController::class, 'properties']);
Route::get('/', [PageController::class, 'homeSell'])->name('home.sell');
Route::get('/rent', [PageController::class, 'homeRent'])->name('home.rent');
Route::get('/properties/{slug?}_{property}', [PageController::class, 'property'])->name('property');
Route::view('/agency', 'pages.agency');
Route::view('/confidential', 'pages.confidential');

Route::view('mansion', 'pages.mansion');
Route::view('agent-forms', 'pages.agents.forms');
Route::view('affordability_calculator', 'pages.affordability_calculator');

Route::get('/test', function () {
    $properties = Property::with('ad_type', 'property_type', 'property_condition', 'entry_condition')->get();
    dd($properties);
});
Route::get('/agencies/{slug?}_{agency}', [PageController::class, 'agencyPage'])->name('agency.view');

Route::get('login-as-agent', [PageController::class, 'loginAsAgent'])->name('login.agent');
Route::get('register-as-agent', [PageController::class, 'registerAsAgent'])->name('register.agent');

Route::group(['controller' => PageController::class], function () {
    Route::get('/form', 'form')->name('view.form');
    Route::get('/my-kemea', 'myKemea')->name('myKemea');
    Route::get('/after-listing', 'afterListing');
});
Route::group(['controller' => AgentController::class], function () {
    Route::post('/create/property', 'createProperty')->name('create.property');
    Route::get('/rent/property', 'rentProperty')->name('rent.property');
});
Route::post('register-as-agent', [AgentController::class, 'register'])->name('agent.register.post');
Route::group(['prefix' => 'agent', 'as' => 'agent.'], function () {
    Route::get('/dashboard', [AgentController::class, 'dashboard'])->name('dashboard');
});
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/notification', [UserController::class, 'notification'])->name('notification');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::post('/password/update', [UserController::class, 'updatePassword'])->name('password.update');
    Route::post('/account/deactivate', [UserController::class, 'deactivateAccount'])->name('account.deactivate');
});

Auth::routes();

// Route::get('/logout', function (Request $request) {
//     Auth::logout();
//     return redirect('/'); 
// });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'publish-your-property', 'as' => 'publish.property.'], function () {
    Route::view('/', 'pages.agents.publish-your-property')->name('home');
    Route::view('/sell', 'pages.agents.property.sell-your-property')->name('sell');
    Route::view('/rent', 'pages.agents.property.rent-your-property')->name('rent');
});

Route::get('test', function () {
    $property = Property::first();

    dd($property->url());
});


Route::post('/file/post', function () {

    return response(['success'], 200);
});
