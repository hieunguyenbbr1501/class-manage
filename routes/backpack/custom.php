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
}); // this should be the absolute last line of this file