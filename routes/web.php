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
Route::get('/', 'registerController@index');


Route::get('login', function () {
    return view('login');
});


Route::get('registercom', 'registerController@registercom');
Route::get('submitcom', 'registerController@submit');

Route::get('/test',function(){
    return view('child');
});

Route::get('/regiserstu',function(){
    return view('regiserstu');
});
