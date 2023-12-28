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
    return view('index');
});


Route::view('gallery', '/gallery');
Route::view('foundation-year', '/foundation-year');
Route::view('hnd-business-managment', '/hnd-business-managment');
Route::view('hnd-computing', '/hnd-computing');
Route::view('elements', '/elements');
Route::view('professional-courses', '/professional-courses');
Route::view('course-details-1', '/course-details-1');
Route::view('course-details-2', '/course-details-2');
Route::view('course-details-3', '/course-details-3');
Route::view('course-details-4', '/course-details-4');
Route::view('contact', '/contact');
Route::view('about', '/about');
Route::view('apply-now', '/apply-now');
Route::view('othm-qualification', '/othm-qualification');
Route::view('postgraguate-programmes', '/postgraguate-programmes');
Route::view('specialist-qualification', '/specialist-qualification');

// single-feature links
Route::view('international-mba', '/international-mba');
Route::view('international-master', '/international-master');
Route::view('business-management', '/business-management');
Route::view('btech-higher', '/btech-higher');
