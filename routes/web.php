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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::resource('students', 'studentController');

Route::resource('company', 'companyController');

Route::resource('teacher', 'teacheroffController');

Route::get('/stulist', function () {
    return view('stulist');
});

Route::get('/loginstu', function () {
    return view('loginstu');
});

Route::get('/loginoff', function () {
    return view('loginoff');
});

Route::get('/logincom', function () {
    return view('logincom');
});

Route::get('/logintea', function () {
    return view('logintea');
});

Route::get('/reportcoop', function () {
    return view('reportcoop');
});

Route::get('/savenote', function () {
    return view('savenote');
});

Route::get('/stu_company', function () {
    return view('stu_company');
});

Route::get('/reason', function () {
    return view('reason');
});


Route::get('/notrecompany-list', function () {
    return view('notregistercompany-list');
});

Route::get('/notreloginstu', function () {
    return view('notregisterloginstu');
});
