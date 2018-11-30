<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('enroll/add','WEB\Admin\EnrollController@store');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getLearningPath', 'API\ApiController@getLearningPath');
Route::get('getAllClass', 'API\ApiController@getAllClass');
Route::post('getClassFromLearning', 'API\ApiController@getClass');
Route::post('detailClass', 'API\ApiController@detailKelas');
Route::post('getCourse', 'API\ApiController@getCourse');
Route::post('detailCourse', 'API\ApiController@detailCourse');
