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


Route::get('app/admin', 'WEB\Admin\UserController@index');
Route::get('app/admin/login', 'WEB\Admin\AuthController@index');
Route::post('app/admin/login', 'WEB\Admin\AuthController@checkLog');

Route::get('/', 'Web\Home\HomeController@index')->name('home');
Route::get('course', 'Web\Home\HomeController@course')->name('course');