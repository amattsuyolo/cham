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

// 咖啡一頁式網站
Route::get('/', function () {
    return view('coffeeshop.coffeeshop');
});
Route::get('/hello/{yo}', '\App\Http\Controllers\Cool\TestController@smsTest');
// 寄信 測試
Route::get("mail","MailController");
// 咖啡一頁式網站聯絡信
Route::get("contact","CoffeeShopController@customerResponse");
