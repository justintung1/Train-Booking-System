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
    //return view('welcome');
	return view('index');
});


Route::get('/css_layout', function () {
    return view('css_layout');
});

Route::get('index', function () {
    return view('index');
});

Route::get('index_check', function () {
    return view('index_check');
});

Route::get('index_result', function () {
    return view('index_result');
});

Route::get('index_search1', function () {
    return view('index_search1');
});

Route::get('index_search2', function () {
    return view('index_search2');
});

Route::get('index_search_train', function () {
    return view('index_search_train');
});

Route::get('index_manage', function () {
    return view('index_manage');
});

Route::get('index_manage_train', function () {
    return view('index_manage_train');
});

Route::get('index_manage_station', function () {
    return view('index_manage_station');
});

Route::get('index_manage_box', function () {
    return view('index_manage_box');
});

Route::get('index_search_train2', function () {
    return view('index_search_train2');
});