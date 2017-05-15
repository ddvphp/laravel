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

Route::group(['middleware'=>[
	// 初始化DdvRestfulApi解析模块和授权模块
    \DdvPhp\DdvRestfulApi\Middleware\InitByLaravel::class,
    // 清理会话信息
    \DdvPhp\DdvRestfulApi\Middleware\ClearSessionByLaravel::class,
    // 开始会话
    \Illuminate\Session\Middleware\StartSession::class,
    // 授权模块
    \DdvPhp\DdvRestfulApi\Middleware\AuthByLaravel::class
]],function(){
	// 会话初始化
    Route::get('session/init',function(){

    });
});

Route::group(['middleware'=>[
	// 初始化DdvRestfulApi解析模块和授权模块
    \DdvPhp\DdvRestfulApi\Middleware\InitByLaravel::class
]],function(){
    // 授权跨越处理
    Route::options('{uri}',function(){})->where(['uri' => '(.*)']);
});
