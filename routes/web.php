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
