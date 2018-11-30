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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('app/login','WEB\Admin\AuthController@index');
Route::get('app/admin/logout','WEB\Admin\AuthController@logout');
Route::post('app/admin/login','WEB\Admin\AuthController@checkLog');

// route user client
Route::group(['middleware' => 'cAuthClient'], function(){

});

// route user admin
Route::group(['middleware' => 'cAuth'], function(){

    //kategori
    Route::get('app/admin','WEB\Admin\UserController@index');
    Route::get('app/admin/kategori','WEB\Admin\KategoriController@index');
    Route::post('app/admin/kategori/add','WEB\Admin\KategoriController@store');
    Route::get('app/admin/kategori/{kategori_id}/edit','WEB\Admin\KategoriController@edit');
    Route::get('app/admin/kategori/{kategori_id}/delete','WEB\Admin\KategoriController@destroy');
    Route::post('app/admin/kategori/{kategori_id}/edit','WEB\Admin\KategoriController@update');

    //kelas
    Route::get('app/admin/kelas/','WEB\Admin\KelasController@index');
    Route::get('app/admin/kelas/add','WEB\Admin\KelasController@insert');
    Route::post('app/admin/kelas/add','WEB\Admin\KelasController@store');
    Route::get('/app/admin/kelas/{kelas_id}/edit','WEB\Admin\KelasController@edit');
    Route::post('/app/admin/kelas/{kelas_id}/edit','WEB\Admin\KelasController@update');
    Route::get('/app/admin/kelas/{kelas_id}/delete','WEB\Admin\KelasController@destroy');

    //kelas konten
    Route::get('app/admin/kelas/{kelas_id}/materi/','WEB\Admin\KelasKontenController@index');
    Route::get('app/admin/kelas/{kelas_id}/materi/add','WEB\Admin\KelasKontenController@insert');
    Route::post('app/admin/kelas/{kelas_id}/materi/add','WEB\Admin\KelasKontenController@store');
    Route::get('app/admin/kelas/{kelas_id}/materi/{materi_id}/edit','WEB\Admin\KelasKontenController@edit');
    Route::post('app/admin/kelas/{kelas_id}/materi/{materi_id}/edit','WEB\Admin\KelasKontenController@update');
    Route::get('app/admin/kelas/{kelas_id}/materi/{materi_id}/delete','WEB\Admin\KelasKontenController@destroy');

    //enroll
    Route::get('app/admin/kelas/{kelas_id}/enroll','WEB\Admin\EnrollController@index');

    //users
    Route::get('app/admin/users','WEB\Admin\UserController@users');
    Route::get('app/admin/user/add','WEB\Admin\UserController@insert');
    Route::post('app/admin/user/add','WEB\Admin\UserController@store');
    Route::get('app/admin/user/{user_id}/edit','WEB\Admin\UserController@edit');
    Route::post('app/admin/user/{user_id}/editData','WEB\Admin\UserController@update');
    Route::post('app/admin/user/{user_id}/editPass','WEB\Admin\UserController@updatePassword');

    Route::get('app/admin', 'WEB\Admin\UserController@index');


    Route::get('class/detail/{id}','Web\Home\HomeController@detailClass')->name('detailkelas');
    Route::get('class/enroll/{kelas_id}','Web\Home\HomeController@enrollClass')->name('enrollclass');
    Route::get('class/content/{kelas_id}/{id}','Web\Home\HomeController@kelasKonten')->name('kelaskonten');

});

Route::get('app/admin/login', 'WEB\Admin\AuthController@index');
Route::post('app/admin/login', 'WEB\Admin\AuthController@checkLog');

Route::get('/', 'Web\Home\HomeController@index')->name('home');
Route::get('class', 'Web\Home\HomeController@course')->name('course');

Route::get('class/{kategori_id}', 'Web\Home\HomeController@getclass')->name('getclass');
