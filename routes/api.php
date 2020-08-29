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

Route::get('/events', 'Api\EventController@index')->name('api.events.index');
Route::post('/events', 'Api\EventController@store');

Route::get('/events/showByDay', 'Api\EventController@showByDay')->name('api.events.showByDay');
Route::get('/events/{event}', 'Api\EventContr' .
    'oller@show');
