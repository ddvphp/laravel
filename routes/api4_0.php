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
    \DdvPhp\DdvRestfulApi\Middleware\ClearSessionByLaravel::class,
    \Illuminate\Session\Middleware\StartSession::class,
    \DdvPhp\DdvRestfulApi\Middleware\AuthByLaravel::class
]],function(){
    Route::post('test/test11',function(){
      //  throw new Exception("Error Processing Request", 1);
        
        return [
            'lists'=>[22,45,6]
        ];
    }) ;
});
