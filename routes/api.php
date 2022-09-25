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



Route::namespace('Api')->group(function () {

    Route::namespace('Admin')->prefix('admin')->group(function () {
        Route::post('/acc/store','AccController@store');

        Route::post('/acc/storeFromChildren','AccController@storeFromChildren');

    });

    Route::post('callback','CardController@callback');


});