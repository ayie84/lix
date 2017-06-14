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

Route::resource('device_types', 'device_typesController');
Route::resource('customers', 'customersController');
Route::resource('orders', 'OrdersController');
Route::resource('status', 'StatusController');