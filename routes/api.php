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

Route::get('learning', 'API\ApiController@getLearningPath');
Route::get('class', 'API\ApiController@getAllClass');
Route::get('class/{id_learning}', 'API\ApiController@getClass');
Route::get('class/detail/{id_class}', 'API\ApiController@detailKelas');
Route::get('course/{id_class}', 'API\ApiController@getCourse');
Route::get('course/detail/{id_course}', 'API\ApiController@detailCourse');
Route::post('search/learningPath', 'API\ApiController@searchLearningPath');
Route::post('search/class', 'API\ApiController@searchClass');
