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

Route::get('/registerstu','registerController@registerstu');
Route::get('/registertea','registerController@registertea');
Route::get('/registeroff','registerController@registeroff');


Route::get('/stu_company',function(){
    return view('stu_company');
});

Route::get('/stulist',function(){
    return view('stulist');
});

Route::get('/savenote',function(){
    return view('savenote');
});

Route::get('/reportcoop',function(){
    return view('reportcoop');
});

Route::get('/loginoff','loginController@loginoff');
Route::get('/loginstu','loginController@loginstu');
Route::get('/logincom','loginController@logincom');
Route::get('/logintea','loginController@logintea');

