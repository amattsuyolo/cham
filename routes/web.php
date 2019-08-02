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


Route::get('/', function () {
    return view('coffeeshop.coffeeshop');
});
Route::get('/hello/{yo}', '\App\Http\Controllers\Cool\TestController@smsTest');

Route::get("mail","MailController@send");

Route::get("contact","CoffeeShopController@customerResponse");
