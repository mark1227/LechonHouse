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

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/order', function () {
    return view('order');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/notification', function () {
    return view('notification');
});

Route::get('/manage', function () {
    return view('manage');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/blacklist', function () {
    return view('blacklist');
});


Route::post('/products', 'ProductsController@index')->name('products.post');
//Route::get('/orders/{username}', 'OrdersController@index')->name('orders.show');
//Route::get('/profile/{username}', 'ProfileController@index')->name('profile.show');