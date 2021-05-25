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

/*
Route::get('/', function () {
    //return view('welcome');
	return view('index');
});
*/
Route::get('/' , 'WebController@index');


//# 前端
Route::group(['prefix' => 'index'], function() {
    Route::get('/', 'WebController@index');
	Route::get('/num', 'WebController@num');
	Route::post('/result', 'WebController@result');
    Route::post('/result_num', 'WebController@result_num');
	
	Route::get('/check', 'WebController@check');
	Route::post('/order', 'WebController@order');

	Route::get('/order2/{num}', 'WebController@order2');
	Route::get('/check2', 'WebController@check2');
	
	Route::get('/order_show', 'WebController@order_show');
	Route::get('/order_del/{orderid}', 'WebController@order_del');
	
    Route::get('/search1', 'WebController@search1');
    Route::post('/search2', 'WebController@search2');
    Route::get('/search_train', 'WebController@search_train');	
});
/*
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
*/


//# 管理端
Route::group(['prefix' => 'manage'], function() {
    Route::get('/', 'ManageController@index');
	
	Route::post('/login', 'ManageController@login');
	Route::get('/logout', 'ManageController@logout');
	Route::get('/verifycode', 'ManageController@verifycode');
	
    Route::get('/train', 'ManageController@train');
	Route::post('/train_add', 'ManageController@train_add');
	Route::post('/train_update', 'ManageController@train_update');
	Route::get('/train_edit/{kn}', 'ManageController@train_edit');
	Route::get('/train_del/{kn}', 'ManageController@train_del');
	
    Route::get('/station', 'ManageController@station');	
	Route::post('/station_add', 'ManageController@station_add');
	Route::post('/station_update', 'ManageController@station_update');
	Route::get('/station_edit/{kn}', 'ManageController@station_edit');
	Route::get('/station_del/{kn}', 'ManageController@station_del');	
	
    Route::get('/box', 'ManageController@box');
	Route::post('/box_add', 'ManageController@box_add');
	Route::post('/box_update', 'ManageController@box_update');
	Route::get('/box_edit/{kn}', 'ManageController@box_edit');
	Route::get('/box_del/{kn}', 'ManageController@box_del');
	
	Route::get('/order_show', 'ManageController@order_show');
	Route::get('/order_del/{orderid}', 'ManageController@order_del');
    //Route::get('/search_train2', 'ManageController@search_train2');	
});

/*
	Route::post('/trainkind_update', 'ManageController@trainkind_update');
	Route::get('/trainkind_edit/{kn}', 'ManageController@trainkind_edit');
	Route::get('/trainkind_del/{kn}', 'ManageController@trainkind_del');
*/

/*
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
*/

?>