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

/**
 * Customer routes
 */
Route::resource('/', 'LandingController');
Route::resource('/customer', 'CustomerRegistrationController');
/**
 * Guest routes
 */
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
