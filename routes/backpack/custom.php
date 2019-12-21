<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('term', 'TermCrudController');
    Route::crud('major', 'MajorCrudController');
    Route::crud('year', 'YearCrudController');
    Route::crud('subject', 'SubjectCrudController');
    Route::crud('course', 'CourseCrudController');
    Route::crud('lecture', 'LectureCrudController');
    Route::crud('post', 'PostCrudController');
    Route::crud('student', 'StudentCrudController');
    Route::crud('lecturer', 'LecturerCrudController');
    Route::get('insert/lecturer','LecturerCrudController@insertFromCSV');
    Route::post('insert/lecturer/post','LecturerCrudController@insertAttempt');
    Route::get('insert/student','StudentCrudController@insertFromCSV');
    Route::post('insert/student/post','StudentCrudController@insertAttempt');

}); // this should be the absolute last line of this file
