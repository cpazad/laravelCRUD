<?php

use Illuminate\Support\Facades\Route;

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

/*
* Group route for staff controller
*/
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'staff'], function(){

    Route::get('/', 'staffController@index') -> name('staff.index');
    Route::get('/create', 'staffController@create') -> name('staff.create');
    Route::post('/store', 'staffController@store') -> name('staff.store');
    Route::get('/show/{id}', 'staffController@show') -> name('staff.show');
    Route::get('/delete/{id}', 'staffController@delete') -> name('staff.delete');

});

/*
* Group route for student controller
*/
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'student'], function(){

    Route::get('/', 'studentController@index') -> name('student.index');
    Route::get('/create', 'studentController@create') -> name('student.create');
    Route::post('/store', 'studentController@store') -> name('student.store');
    Route::get('/show/{id}', 'studentController@show') -> name('student.show');
    Route::get('/delete/{id}', 'studentController@delete') -> name('student.delete');

});

/*
* Group route for teacher controller
*/
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'teacher'], function(){

    Route::get('/', 'teacherController@index') -> name('teacher.index');
    Route::get('/create', 'teacherController@create') -> name('teacher.create');
    Route::post('/store', 'teacherController@store') -> name('teacher.store');
    Route::get('/show/{id}', 'teacherController@show') -> name('teacher.show');
    Route::get('/delete/{id}', 'teacherController@delete') -> name('teacher.delete');

});
