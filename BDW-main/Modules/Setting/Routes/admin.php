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


// Route::middleware(['auth:admin'])->group(function(){

    Route::get('settings','SettingController@index')->name('settings');
    Route::post('settings/save','SettingController@save')->name('settings.save');

// });