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

Route::resource('/' , 'HomeController');
Route::resource('All-courses' , 'CoursesController');
Route::post('register-course' , 'CoursesController@registerAction')->name('register-course');
Route::resource('articles' , 'ArticlesController');
Route::resource('profile' , 'SpeakersController');
Route::post('save-comment' , 'ArticlesController@saveComment')->name('save-comment');
