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

Route::get('index', 'registerController@index');


Route::get('login', function () {
    return view('login-com');
});


Route::get('registercom', 'registerController@registercom');
Route::post('submit', 'registerController@submit');

