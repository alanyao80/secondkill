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

Route::get('/hello', function () {
    return "hello world";
});

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::match(['get','post'],'/student', 'StudentController@index');


    Route::match(['get','post'],'/', 'Index@index');
    Route::match(['get','post'],'/login', 'Login@index');
    Route::match(['get','post'],'/gologin', 'Login@login');


    Route::match(['get','post'],'/user/', 'User@index')->middleware('adminauth');
    Route::match(['get','post'],'/user/info', 'User@info');
});