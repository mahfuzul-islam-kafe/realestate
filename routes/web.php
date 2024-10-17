<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Models\Property;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/listing', 'pages.listing');
Route::view('/agency', 'pages.agency');
Route::view('/confidential', 'pages.confidential');

Route::view('mansion', 'pages.mansion');
Route::view('agent-forms', 'pages.agents.forms');
Route::view('affordability_calculator', 'pages.affordability_calculator');

Route::get('/test', function () {
    $properties = Property::with('ad_type', 'property_type', 'property_condition', 'entry_condition')->get();
    dd($properties);
});
Route::get('login-as-agent', [PageController::class, 'loginAsAgent'])->name('login.agent');
Route::get('register-as-agent', [PageController::class, 'registerAsAgent'])->name('register.agent');
Route::group(['controller' => PageController::class], function () {
    Route::get('/form', 'form')->name('view.form');
    Route::get('/user-registered', 'registered');
});
Route::group(['controller' => AgentController::class], function () {
    Route::post('/form/submit', 'formSubmit')->name('form.submit');
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


Route::group(['prefix' => 'publish-your-property','as'=>'publish.property.'],function(){
    Route::view('/','pages.agents.publish-your-property')->name('home');
    Route::view('/sell','pages.agents.sell-your-property')->name('sell');
    Route::view('/rent','pages.agents.rent-your-property')->name('rent');
});
