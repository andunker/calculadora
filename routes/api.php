<?php

use Illuminate\Http\Request;

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

Route::get('sumar', 'API\CalculoController@sumar');
Route::get('restar', 'API\CalculoController@restar');
Route::get('multiplicar', 'API\CalculoController@multiplicar');
Route::get('dividir', 'API\CalculoController@dividir');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
