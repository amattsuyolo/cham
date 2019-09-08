<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// 回傳特定類別影片資訊
Route::get('video/{tagid}/{page?}', 'VideoController@ClassificationVideos');

Route::post('apitry', 'api\PostController@index');

Route::get('usercache', 'AuthController@userCache');

Route::group([
    'prefix' => 'auth'
], function () {
    // 登入
    Route::post('login', 'AuthController@login');
    // 註冊
    Route::post('signup', 'AuthController@signup');
    // 簡訊驗證碼傳送
    Route::post('sms', 'AuthController@sendValidateSms');
    // email驗證碼傳送
    Route::post('email', 'AuthController@sendValidateEmail');
    // 驗證碼確認
    Route::put('codecheck/{user_id}', 'AuthController@confirmValidateCode');
     // 需要使用token的相關功能
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
       
    });
});