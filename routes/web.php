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
    return view('welcome');
});

Route::get('index', function () {
    return view('child');
});
Route::get('register', function () {
    return view('register.register-stu');
});
Route::get('register2', function () {
    return view('register.register-tea');
});
Route::get('register3', function () {
    return view('register.register-off');
});
Route::get('register4', function () {
    return view('register.register-com');
});
Route::get('company-list', function () {
    return view('register.company-list');
});
Route::get('stu_company', function () {
    return view('register.stu_company');
});
Route::get('formup', function () {
    return view('register.formup');
});
