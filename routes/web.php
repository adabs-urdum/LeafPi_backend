<?php

use app\Http\Controllers\HomeController;

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
Route::get('/', 'HomeController@home');
Route::get('/turn-on', 'HomeController@turnOn')->name('turnOn');
Route::get('/turn-off', 'HomeController@turnOff')->name('turnOff');
Route::get('/toggle-on', 'HomeController@toggleOn')->name('toggleOn');
Route::get('/brightness/{newBrightness}', 'HomeController@brightness')->name('brightness');
Route::get('/temperature/{newTemperature}', 'HomeController@temperature')->name('temperature');
