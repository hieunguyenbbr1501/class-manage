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
Route::post('/student/login.html','Frontend\FrontendUserController@loginAsStudent');
Route::get('/lecturer/login.html', 'Frontend\FrontendUserController@loginAsLecturer');
Route::group(['middleware' => ['checkLogin']],function (){
    Route::get('student/dashboard','Frontend\FrontendUserController@index');
});
Route::get('/test','Frontend\HomeController@index');
Route::get('api/subject', 'App\Http\Controllers\Api\SubjectController@index');
Route::get('api/subject/{id}', 'App\Http\Controllers\Api\SubjectController@show');

