<?php

use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\SmartphonesController;
use App\Http\Controllers\googleAccountsController;

Route::post('/login', [App\Http\Controllers\usersController::class, 'userAuth']);
Route::get('/validateToken', App\Http\Controllers\validateTokenController::class);
// Route::get('/equipment_details/{id}', [App\Http\Controllers\testController::class, 'equipment_details']);

Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/equipment_details/{id}', [App\Http\Controllers\testController::class, 'equipment_details']);
    Route::get('/json/equipos', function () { $newEquipo = new testController;return $newEquipo->equipos(); });
    Route::get('/equipos/get', [App\Http\Controllers\testController::class, 'createEquipo']);
    Route::post('/save', [App\Http\Controllers\testController::class, 'createEquipo']);
    Route::post('/equipos/create', [App\Http\Controllers\testController::class, 'createEquipo']);
    Route::post('/update', [App\Http\Controllers\testController::class, 'updateEquipo']);
    Route::get('/equipos/delete/{id}', [App\Http\Controllers\testController::class, 'deleteEquipo']);
    Route::get('/json/smartphones', function () { $smartphones = new SmartphonesController; return $smartphones->getSmartphones(); });
    Route::post('/smartphones/create', [App\Http\Controllers\SmartphonesController::class, 'createSmartphone']);
    Route::post('/smartphones/update/{id}', [App\Http\Controllers\SmartphonesController::class, 'updateSmartphone']);
    Route::get('/smartphones/delete/{id}', [App\Http\Controllers\SmartphonesController::class, 'deleteSmartphone']);
    Route::get('/json/google_accounts', function () { $googleAc = new googleAccountsController; return $googleAc->getGoogleAC(); });
    Route::post('/google_accounts/create', [App\Http\Controllers\googleAccountsController::class, 'createGoogleAC']);
    Route::post('/google_accounts/update/{id}', [App\Http\Controllers\googleAccountsController::class, 'updateGoogleAC']);
    Route::get('/google_accounts/delete/{id}', [App\Http\Controllers\googleAccountsController::class, 'deleteGoogleAC']);
    Route::post('/register', [App\Http\Controllers\usersController::class, 'createUser']);
});