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

Route::resource('student','StudentController');
Route::resource('teacher','TeacherController');
Route::resource('subject','SubjectController');
Route::resource('subject_year','SubjectYearController');

