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
    return view('quote');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/base', function () {
    return view('base');
});

Route::get('/page-one', function () {
    return view('pageOne');
});

Route::get('/page-two', function () {
    return view('pageTwo');
});


Route::resource('page', 'test');
Route::get('test/tambah', 'test@tambah');
