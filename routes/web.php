<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/user-register', 'HomeController@userRegister');
Route::post('/user-register', 'HomeController@saveUser');
Route::get('/see-dust-request', 'HomeController@seeDustRequest');
Route::get('do/logout', function (){
    Auth::logout();
    return redirect('/');
});



/**
 * Routes For Admin
 */
Route::namespace('Admin')
    ->middleware(['admin', 'web'])
    ->prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::get('dashboard', 'AdminController@index');
        Route::resource('driver', 'DriverController');
        Route::resource('driver', 'DriverController');
        Route::get('dust-request', 'DustController@Dustrequest');

    });

/**
 * Routes For Driver
 */
Route::group(['middleware' => 'driver', 'prefix' => 'driver'], function () {

    Route::get('dashboard', 'Driver\DriverController@index');
    Route::get('request', 'Driver\DriverController@request');
    Route::get('accept-request/{id}', 'Driver\DriverController@Acceptrequest');

});

/**
 * Routes For User
 * @prefix user
 * @namespace
 */
Route::group(['middleware' => 'user', 'prefix' => 'user'], function () {

    Route::get('dashboard', 'User\UserController@index');
    Route::get('my-request', 'User\UserController@myRequest');
    Route::get('add-new-request', 'User\UserController@addNewRequest');
    Route::post('add-new-request', 'User\UserController@saveNewRequest');

});

Auth::routes();

Route::get('denied', function () {

    return view('errors.permission-denied');
})->name('denied');
