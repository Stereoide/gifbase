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

Route::get('/', 'GifController@index');
Route::get('gif/{id}/download', 'GifController@download');
Route::resource('gif', 'GifController');

Route::resource('categories', 'CategoryController');
