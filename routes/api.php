<?php

use App\Models\equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

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

Route::get('/json/addreg', function () {
    $newEquipo = new testController;
    return $newEquipo->saveEquipo();
});