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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mywork', 'MyWorkController@index');
Route::get ('mywork/{id}','MyWorkController@show');
Route::post('mywork','MyWorkController@store');
Route::put('mywork/{id}', 'MyWorkController@update');
Route::delete('mywork/{id}', 'MyWorkController@delete');

