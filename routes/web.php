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
Auth::routes();
Route::get('/', 'AloController@index')->name('home');
Route::get('/AboutUs','AloController@about')->name('about');

Route::post('/AjaxSend', 'AjaxController@ajaxRequestPost');


Route::get('/StatusCheck','StatusController@Status');
Route::get('/StatusFetch/{id}/{mob}','StatusController@statfetch');
Route::get('/SendCode/{id}/{mob}','SmsController@sendcode');
