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


Route::get('/','AppController@home');

Route::get('/search','AppController@home');

Route::post('/search','EPController@search');

Route::get('/view/{lmKey}','EPController@view');

Route::get('/compare/{postcode}','EPController@compare');


