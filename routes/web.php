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

// Static Pages
Route::view('/agency', 'pages.agency');
Route::view('/confidential', 'pages.confidential');
Route::view('mansion', 'pages.mansion');
Route::view('agent-forms', 'pages.agents.forms');
Route::view('affordability_calculator', 'pages.affordability_calculator');

// Agency Pages
Route::get('/agencies/{slug?}_{agency}', [PageController::class, 'agencyPage'])->name('agency.view');

// Agent Authentication Routes
Route::get('login-as-agent', [PageController::class, 'loginAsAgent'])->name('login.agent');
Route::get('register-as-agent', [PageController::class, 'registerAsAgent'])->name('register.agent');
Route::post('register-as-agent', [AgentController::class, 'register'])->name('agent.register.post');

// Publish Your Property Section
Route::group(['prefix' => 'publish-your-property', 'as' => 'publish.property.'], function () {
    Route::view('/', 'pages.agents.publish-your-property')->name('home');
    Route::view('/sell', 'pages.agents.property.sell-your-property')->name('sell');
    Route::view('/rent', 'pages.agents.property.rent-your-property')->name('rent');
});

// PageController Group
Route::group(['controller' => PageController::class], function () {
    Route::get('/form', 'form')->name('view.form');
    Route::get('/my-kemea', 'myKemea')->name('myKemea');
    Route::get('/after-listing', 'afterListing');
    Route::get('/rent-out', 'rentOut');
    Route::get('/sale-out', 'saleOut');
    Route::get('/to-study', 'toStudy')->name('toStudy');
    Route::get('/favorites', 'favorites')->name('favorites');
});

// AgentController Group
Route::group(['controller' => AgentController::class], function () {
    Route::post('/create/property', 'createProperty')->name('create.property');
    Route::get('/rent/property', 'rentProperty')->name('rent.property');
});

// Agent Dashboard
Route::group(['prefix' => 'agent', 'as' => 'agent.'], function () {
    Route::get('/dashboard', [AgentController::class, 'dashboard'])->name('dashboard');
});

// User Profile and Settings
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/notification', [UserController::class, 'notification'])->name('notification');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::post('/password/update', [UserController::class, 'updatePassword'])->name('password.update');
    Route::post('/account/deactivate', [UserController::class, 'deactivateAccount'])->name('account.deactivate');
});
Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::post('/favorites/add', 'favoriteAdd')->name('favorite.add');
    });
});


// Auth Routes
Auth::routes();

// Test Route


// File Upload
Route::post('/file/post', function () {
    return response(['success'], 200);
});
