<?php

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

get('/', ['as' => '/', 'uses' => 'HomeController@index']);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::bind('student',    function ($id) { return App\Student::whereId($id)->first(); });
Route::resource('student', 'StudentController');
get('student_registration', ['as' => 'stud_reg', 'uses' => 'StudentController@regForm']);

Route::bind('user', function ($id) { return App\User::whereId($id)->first(); });
Route::resource('user', 'UserController');



get('user_management', ['as' => 'u_m', 'uses' => 'UserController@manageUser']);