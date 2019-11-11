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
Route::post('/login.html','Frontend\FrontendUserController@login');
Route::group(['middleware' => ['checkLogin']],function (){
    Route::get('student/dashboard','Frontend\StudentController@index');
});
Route::group(['middleware' => ['checkLoginForLecturer']],function (){
    Route::get('lecturer/dashboard', 'Frontend\FrontendController@index');
});
Route::get('/test','Frontend\HomeController@index');
Route::get('api/subject', 'App\Http\Controllers\Api\SubjectController@index');
Route::get('api/subject/{id}', 'App\Http\Controllers\Api\SubjectController@show');

