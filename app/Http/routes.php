<?php

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

get('/', ['as' => '/', 'uses' => 'HomeController@index']);

// Student Route
Route::bind('student',    function ($id) { return App\Student::whereId($id)->first(); });
Route::resource('student', 'StudentController');
    # Defined routes
    get('examiner/{eid}', ['as' => 'stud_exam', 'uses' => 'StudentController@entranceExamForm']);
    post('submit_exam', ['as' => 'submit_exam', 'uses' => 'StudentController@submitExam']);


// User Route
Route::bind('user', function ($id) { return App\User::whereId($id)->first(); });
Route::resource('user', 'UserController');


// Subject Route
Route::bind('subject', function ($id) {return App\Subject::whereId($id)->first(); });
Route::resource('subject', 'SubjectController');


// Exam Route
Route::bind('exam', function ($id) { return App\Exam::whereId($id)->first(); });
Route::resource('exam', 'ExamController');