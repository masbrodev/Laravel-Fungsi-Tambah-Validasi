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

Route::get('/','MasakanController@index');

Route::get('/a','OrderController@index');

Route::post('tambah1', 'MasakanController@simpan');

Route::post('tambah2', 'MasakanController@update');
