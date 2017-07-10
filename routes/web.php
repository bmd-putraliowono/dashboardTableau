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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('log-in');

Route::group(['middleware' => 'web'], function () {
    Auth::routes();
    Route::get('/logout', 'Auth\LoginController@logout')->name('log-out');
    // Route::get('/home', 'home@index')->name('home');

    Route::group(['prefix' => 'admin', 'middleware'=>['auth']], function() {
        Route::get('/home', 'home@index')->name('home');
    });

    Route::group(['prefix' => 'user', 'middleware'=>['auth']], function() {
        //
    });
});
