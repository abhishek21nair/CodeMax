<?php

use App\Http\Controllers\Manufactures;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\Models;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/v1/manufacture', 'Manufactures@store');
Route::get('/v1/manufactures', 'Manufactures@index');
Route::post('/v1/addModel','ModelController@store');
Route::get('v1/showmodels','ModelController@index');
