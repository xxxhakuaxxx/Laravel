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

/* 教科書 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');

/* 実習問題 */

Route::get('jissyu2', 'JissyuController@index');        /* Chapter2_実習問題_1 */