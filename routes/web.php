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
    return view('welcome');
});
Route::delete('/orders/{order}', 'OrderController@destroy')->name('orders.destroy');
Route::get('/orders', 'OrderController@index')->name('orders.index');
Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::post('/orders', 'OrderController@store')->name('orders.store');
Route::get('orders/{order}', 'OrderController@show')->name('orders.show');
Route::get('orders/{order}/edit', 'OrderController@edit')->name('orders.edit');
Route::put('orders/{order}', 'OrderController@update')->name('orders.update');