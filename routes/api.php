<?php

use App\Models\equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\SmartphonesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/jokes', 'JokeController@getRandomJoke');
// Route::get('/json/equipos', function () {
//     $equipos = App\Models\equipos::all();
//     //  dd("Hola mundo"); 
//      //dd($equipos); /*Aqui esta linea me ayuda a ver exactamente que es lo que se está retornando a mi app antes de que se retorne*/
//     return response()->json($equipos);
// });
Route::get('/json/equipos', function () {
    $newEquipo = new testController;
    return $newEquipo->equipos();
});
Route::get('/equipos/get', [App\Http\Controllers\testController::class, 'createEquipo']);
Route::post('/save', [App\Http\Controllers\testController::class, 'createEquipo']);
Route::post('/equipos/create', [App\Http\Controllers\testController::class, 'createEquipo']);
Route::put('/update/{id}', [App\Http\Controllers\testController::class, 'updateEquipo']);
Route::delete('/equipos/delete/{id}', [App\Http\Controllers\testController::class, 'deleteEquipo']);


Route::get('/json/smartphones', function () {
    $smartphones = new SmartphonesController;
    return $smartphones->getSmartphones();
});
Route::post('/smartphones/create', [App\Http\Controllers\SmartphonesController::class, 'createSmartphone']);
Route::put('/smartphones/update/{id}', [App\Http\Controllers\SmartphonesController::class, 'updateSmartphone']);
Route::delete('/smartphones/delete/{id}', [App\Http\Controllers\SmartphonesController::class, 'deleteSmartphone']);