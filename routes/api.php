<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('login', 'Api\ApiTokenController@login');

Route::middleware('api.auth')->group(function () {
    Route::prefix('events')->group(function () {
        Route::get('', 'Api\EventController@index')->name('api.events.index');
        Route::post('', 'Api\EventController@store');

        Route::get('showByDay', 'Api\EventController@showByDay')->name('api.events.showByDay');
        Route::get('{event}', 'Api\EventController@show');

        Route::put('{event}', 'Api\EventController@update');
        Route::delete('{event}', 'Api\EventController@destroy');
    });

    Route::prefix('documents')->group(function () {
        Route::get('', 'Api\DocumentController@index');
        Route::post('', 'Api\DocumentController@store');
        Route::delete('{event}', 'Api\DocumentController@destroy');
    });

    Route::prefix('sliders')->group(function () {
        Route::get('', 'Api\SliderController@index');
        Route::post('', 'Api\SliderController@store');
        Route::delete('{slider}', 'Api\SliderController@destroy');
    });
});
