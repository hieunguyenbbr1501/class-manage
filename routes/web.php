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
Route::get('api/subject', 'App\Http\Controllers\Api\SubjectController@index');
Route::get('api/subject/{id}', 'App\Http\Controllers\Api\SubjectController@show');
