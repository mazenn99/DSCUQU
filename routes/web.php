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


Auth::routes(['verify' => true]);
Route::get('attend-courses/{hash}' , 'Admin\attendCourseController@showTablesAttendCourses');
Route::post('confirm-courses-attend' , 'Admin\attendCourseController@confirmAttend')->name('confirm-attend');
Route::post('send-contact-us-message' , 'Users\HomeController@sendContactUsMessage')->name('send-contact-us-message');

//Route::get('test' , function() {
//    $img = Image::make(asset('site/images/certificate/certificate.jpg'));
//    $img->text('mazen' , 50 , 50 , function($font) {
//       $font->file('admin/site/fonts/fontawesome-webfont.ttf');
//       $font->size(24);
//       $font->color('#DD999');
//       $font->align('center');
//#       $font->angel('45');
//    });
//    return $img->response('jpg');
//});



