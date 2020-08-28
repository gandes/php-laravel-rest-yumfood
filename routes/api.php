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

Route::prefix('v1')->group(function () {
    
    Route::apiResource('dishes', 'DishController');

    Route::prefix('vendors')->group(function () {
        Route::apiResource('/', 'VendorController');
        Route::post('/', 'VendorController@store');
        Route::get('{id}', 'VendorController@show');
        Route::get('{id}/dishes', 'VendorController@showDishes');
        Route::put('{id}', 'VendorController@update');
        Route::delete('{id}', 'VendorController@destroy');
    });

    Route::prefix('orders')->group(function (){
        Route::post('/', 'OrderController@store');
        Route::get('{id}', 'OrderController@show');
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


