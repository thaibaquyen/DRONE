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
    return redirect('/home');
});


route::get('/home','App\Http\Controllers\Home@getindex');

route::get('/singerProduct/{masp}','App\Http\Controllers\Home@singerProduct');

route::get('/detail','App\Http\Controllers\Home@detail');

route::get('/shop','App\Http\Controllers\Shop@getindex');

route::get('/shop/{id}','App\Http\Controllers\Shop@getindexsearch');

route::get('/shopgroup/{id}','App\Http\Controllers\Shop@getgroupsearch');

route::get('/addToCart','App\Http\Controllers\Cart@addcart');

route::get('/cart','App\Http\Controllers\Cart@index');

route::get('/updateCart','App\Http\Controllers\Cart@updatecart');

route::get('/removeCart','App\Http\Controllers\Cart@removecart');

route::get('/cartChild','App\Http\Controllers\Cart@cartchild');

route::get('/buy','App\Http\Controllers\Cart@buy');

Route::get('/about', function () {
    return view('client/About');
});
//login
route::post('/register','App\Http\Controllers\Login@register');

route::post('/loginuser','App\Http\Controllers\Login@login');

route::post('/confirmzip','App\Http\Controllers\Login@confirmzip');


route::get('/logout','App\Http\Controllers\Login@logout');

// Route::get('/shop', function () {
//     return view('client/Shop');
// });

Route::get('/blog', function () {
    return view('client/Blog');
});

Route::get('/contact', function () {
    return view('client/Contact');
});

// Route::get('/singerProduct', function () {
//     return view('client/Singer_Product');
// });

// Route::get('/cart', function () {
//     return view('client/Cart');
// });


Route::get('/login', function () {
    return view('client/Login');
});
