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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/order', function () {
    return view('order');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/order', function () {
    return view('order');
});

Route::post('/products', 'ProductsController@index')->name('orders.post');
Route::get('/orders/{username}', 'OrdersController@index')->name('orders.show');
Route::get('/profile/{username}', 'ProfileController@index')->name('profile.show');