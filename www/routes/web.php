<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/orders/{count?}', 'OrdersController@index');

Route::group(['prefix' => 'account', 'middleware' => ['auth']], function () {

    Route::get('/', 'AccountController@index');

    Route::resource('orders', 'OrdersController', [
        'destroy', 'create'
    ]);
});
