<?php

use Illuminate\Support\Facades\Route;

/**
 * Routes For Admin
 */
Route::group(
    ['middleware' => 'admin',
        'prefix' => 'admin',
    ], function () {

    Route::get('dashboard', 'Admin\AdminController@index');
    Route::resource('driver', 'Admin\DriverController');
});

/**
 * Routes For Driver
 */
Route::group(['middleware' => 'driver', 'prefix' => 'driver'], function () {

    Route::get('dashboard', 'Driver\DriverController@index');

});

/**
 * Routes For User
 * @prefix user
 * @namespace
 */
Route::group(['middleware' => 'user', 'prefix' => 'user'], function () {

    Route::get('dashboard', 'Admin\AdminController@index');

});

Auth::routes();

Route::get('denied', function () {

    return view('errors.permission-denied');
})->name('denied');
