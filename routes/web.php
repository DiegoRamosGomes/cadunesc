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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::get('/events', 'EventController@index')->name('events');
Route::get('/events/{event}', 'EventController@show')->name('events.show');

Route::get('/documents', 'DocumentController@index')->name('students');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

Route::get('/receipt/event', 'ReceiptController@event')->name('receipt.event');
Route::post('/receipt/event', 'ReceiptController@storeEvent')->name('receipt.store-event');
Route::get('/receipt/management', 'ReceiptController@management')->name('receipt.management');
Route::post('/receipt/management', 'ReceiptController@stpreManagement')->name('receipt.store-management');
