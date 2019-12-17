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
Route::get('student/login.html',[
    'uses' => 'StudentLoginController@showLoginForm',
    'as' => 'student.login.get'
]);
Route::post('student/login-attempt.html',[
    'uses' => 'StudentLoginController@login',
    'as' => 'student.login.post'
]);
Route::get('lecturer/login.html',[
    'uses' => 'LecturerLoginController@showLoginForm',
    'as' => 'lecturer.login.get'
]);
Route::post('lecturer/login-attempt.html',[
    'uses' => 'LecturerLoginController@login',
    'as' => 'lecturer.login.post'
]);
Route::group(['middleware' => ['checkLogin']],function (){
    Route::get('student/dashboard',[
        'uses' => 'StudentController@index',
        'as' => 'student.dashboard'
    ]);
    Route::get('student/enrol/{id}',
        [
            'uses' => 'StudentController@enrol',
            'as' => 'student.enrol',
        ]);
    Route::get('student/course/{id}',[
        'uses' => 'StudentController@courseDetail',
        'as' => 'student.course.detail'
    ]);
});
Route::group(['middleware' => ['checkLoginForLecturer']],function (){
    Route::get('lecturer/dashboard', [
        'uses' => 'LecturerController@index',
        'as' => 'lecturer.dashboard'
    ]);
    Route::get('lecturer/course/{id}',[
        'uses' => 'LecturerController@courseDetail',
        'as' => 'lecturer.course.detail'
    ]);
    Route::get('lecturer/detail.html',[
        'uses' => 'LecturerController@detail',
        'as' => 'lecturer.detail'
    ]);
    Route::post('lecturer/upload/{lecture}', 'LecturerController@uploadLecture')->name('lecturer.upload');

});
Route::get('/test','Frontend\HomeController@index');
Route::get('api/subject', 'App\Http\Controllers\Api\SubjectController@index');
Route::get('api/subject/{id}', 'App\Http\Controllers\Api\SubjectController@show');

Route::get('export', 'MyController@export')->name('export');
Route::get('importExportView', 'MyController@importExportView');
Route::get('toarray','MyController@toArray');

//test of Duy
Route::get('homestay',function (){
    return view('trungduy/home');
});
Route::get('postdoc',function (){
    return view('trungduy/postDocument');
});
Route::get('login',function(){
    return view('trungduy/login');
});
Route::get('test',function (){
    return view('trungduy.my');
});
Route::get('homes',function (){
    return view('trungduy/homes');
});
Route::get('subdetail',function (){
    return view('trungduy/subdetail');
});

Route::get('detail',function (){
    return view('trungduy/UserDetail');
});
Route::get('editprofile',function (){
    return view('trungduy/editProfile');
});





