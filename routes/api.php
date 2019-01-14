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
Route::get('roles','RolesController@index');
Route::post('roles','RolesController@create');
Route::put('/roles/{id}','RolesController@update');
Route::delete('/roles/{id}','RolesController@delete');

Route::get('pos','PositionController@index');
Route::post('pos','PositionController@create');
Route::put('/pos/{id}','PositionController@update');
Route::delete('/pos/{id}','PositionController@delete');

Route::get('item','ItemController@index');
Route::post('item','ItemController@create');
Route::put('/item/{id}','ItemController@update');
Route::delete('/item/{id}','ItemController@delete');
