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

Route::get('/home', function () {
    return view('client/Home');
});
// wwwww
Route::get('/about', function () {
    return view('client/About');
});

Route::get('/shop', function () {
    return view('client/Shop');
});

Route::get('/blog', function () {
    return view('client/Blog');
});

Route::get('/contact', function () {
    return view('client/Contact');
});

Route::get('/singerProduct', function () {
    return view('client/Singer_Product');
});

Route::get('/cart', function () {
    return view('client/Cart');
});

Route::get('/login', function () {
    return view('client/Login');
});
