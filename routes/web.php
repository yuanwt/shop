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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','homes\IndexController@index');
/*Route::group(['prefix' => 'fuck'],function(){
	Route::get('hello',function(){
		return 'fuckhelo';
	});
});*/
Route::get('/hello',function(){
	return 'hello';
});

Route::group(['prefix' =>'admin','namespace'=>'admins'],function(){
	Route::get('index/index','IndexController@index');
	Route::match(['get','post'],'goods/add','GoodsController@add');
	Route::match(['get','post'],'goods/detail/{id?}','GoodsController@detail');
	Route::match(['get','post'],'goods/edit/{id?}','GoodsController@edit');
	Route::match(['get','post'],'goods/list','GoodsController@list');
});
Route::get('home/index/index','homes\IndexController@index');
Route::get('/admin/index/index','admins\IndexController@index');