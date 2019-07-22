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
 * Auth routes
 */
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
/**
 * Customer routes
 */
Route::resource('/', 'LandingController')->only(['index','store']);
Route::resource('/customer', 'CustomerRegistrationController')->only(['index','store']);
Route::get('/{category}', function (App\Models\OrgCategory $category) {    
    return view('category', compact('category')); 
})->name('category');

