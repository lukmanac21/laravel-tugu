<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/welcome');
});

Route::group(['middleware' => 'redirect'], function() {

    Route::get('/home', 'HomeController@index')->name('home.admin');
    Route::get('/homeuser','HomeUserController@index')->name('home.user');

});

Route::resource('item','ItemController');
Route::resource('position','PositionController');   
Route::resource('user','UserController');
Route::resource('card','CardController');   
Route::resource('list','ItemListController');
Route::get('card{id}','CardController@detail');

Route::get('/login','Auth/LoginController@login');
Auth::routes();