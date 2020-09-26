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

#Route::resource('')
Route::group(['middleware' => 'guest:admin' , 'throttle:2,1' ] , function() {
    Route::get('/' , 'AdminLoginController@getLoginForm')->name('admin-login-form');
    Route::post('/' , 'AdminLoginController@checkLogin')->name('admin-login');
});

Route::group(['middleware' => 'auth:admin'] , function() {
    ####################### logout Admin #####################
    Route::post('admin-logout' , 'AdminController@adminLogout')->name('admin-logout');
    ####################### logout Admin #####################
    Route::resource('dashboard' , 'AdminController');
    ############## CRUD all users ##################
    Route::resource('admins' , 'CRUDAdminsController');
    ############## CRUD all users ##################

    ############## CRUD Courses ####################
    Route::resource('courses' , 'CRUDCoursesController');
    Route::get('courses-subscription/{id}' , 'CRUDCoursesController@showSubscriptionCourse')->name('subscription-course');
    ############## CRUD Courses ####################

    ############## CRUD TypeCourses ################
    Route::resource('type-courses' , 'TypeCoursesController');
    ############## CRUD TypeCourses ################

    ############## CRUD Articles #######################
    Route::resource('article' , 'articleController');
    ############## End CRUD Articles ###################

    ############## CRUD Section ###################
    Route::resource('section' , 'sectionController');
    ############## CRUD Section ###################

    ############## CRUD Speakers ##################
    Route::resource('speakers' , 'speakerController');
    ############## CRUD Speakers ##################

    ############## CRUD Comments ##################
    Route::resource('comments' , 'commentController');
    ############## CRUD Comments ##################
});
