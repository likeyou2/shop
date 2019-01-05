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

Route::get('/adduser','User\UserController@add');

//路由跳转
Route::redirect('/hello1','/world1',301);
Route::get('/world1','Test\TestController@world1');

Route::get('hello2','Test\TestController@hello2');
Route::get('world2','Test\TestController@world2');


//路由参数
Route::get('/admin/{uid}','User\UserController@admin');
Route::get('/month/{m}/date/{d}','Test\TestController@md');
Route::get('/name/{str?}','Test\TestController@showName');
Route::get('/data','User\UserController@data');



// View视图路由
Route::view('/mvc','mvc');
Route::view('/error','error',['code'=>403]);



Route::any('/adminAdd','Admin\AdminController@adminAdd');
Route::any('/adminInfo','Admin\AdminController@insert');

Route::any('/login','Admin\AdminController@login');
Route::any('/loginInfo','Admin\AdminController@loginInfo');


// Query Builder
Route::get('/query/get','Test\TestController@query1');
Route::get('/query/where','Test\TestController@query2');
