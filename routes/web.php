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
    return view('views');
});
Route::view('productpage','productpage');

Route::view('login','login');

Route::view('signin','signin');

Route::view('store','store');


Route::view('contact','contact');

Route::view('tools','tools');

Route::view('cart','cart');

Route::view('product','product');

Route::view('vendor','vendor');

Route::view('vservices','services.Designing');


Route::view('list','services.vendorlist');

Route::view('plants','services.plants&tree');


Route::view('seeds','services.seeds');

Route::view('pots','services.pots');