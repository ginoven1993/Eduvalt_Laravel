<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::match(['get', 'post'], '/', 'App\Http\Controllers\IndexController@index');
Route::match(['get', 'post'], '/upload_courses', 'App\Http\Controllers\CourseController@index');
Route::match(['get', 'post'], '/upload_courses/store', 'App\Http\Controllers\CourseController@store')->name('store.courses');
Route::match(['get', 'post'], '/courses-details/{id}', 'App\Http\Controllers\CourseController@show');
Route::match(['get', 'post'], '/add_to_cart/{id}', 'App\Http\Controllers\CourseController@addToCart')->name('add_to_cart');

