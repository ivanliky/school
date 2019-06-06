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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/marks/{mark}', 'DataController@marks')->name('marks');
// Route::get('/students/{id}', 'DataController@showStudents')->name('students');
Route::get('/class', 'DataController@showClasses')->name('classes');
Route::get('/teacher/grades/{id}', 'TeacherGradesController@showGrades')->name('grades');
Route::get('/teacher/grades/create', 'TeacherGradesController@create')->name('teacher.grades.create');
Route::get('/teacher', 'TeacherGradesController@index')->name('teacher.grades.index');
Route::post('/teacher/grades/store', 'TeacherGradesController@store')->name('teacher.grades.store');
