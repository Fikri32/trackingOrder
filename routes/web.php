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

Route::get('/', function () {
    return view('layouts/master');
});


Route::get('home','FrontController@index')->name('home.index');
Route::get('tracking','TrackingController@index')->name('tracking.index');
// Route::get('tracking/po','TrackingController@cari')->name('tracking.po');
