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

Route::get('/', function(){
    return '/ route';
});

Route::get('/hotels', 'HotelController@index');

Route::prefix('reservations')->group(function () {
    Route::get('reservations/create{id}', 'HotelController@create');
    Route::resource('reservations', 'ReservationController')->except('create');
});

Route::post('reservations', function(){
    return 'Creating reservation';
});

Route::put('reservations/{id}', function(){
    return 'Updating reservation id”';
});

Route::delete('reservations/{id}', function(){
    return 'Deleting reservation id”';
});

