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

Route::post('hello', 'HelloController@post');

// use App\Http\Middleware\HelloMiddleware;　を追記

/* Route::get('hello', 'HelloController@index')
    ->middleware(HelloMiddleware::class);
 */

/* 実習問題 */

Route::get('jissyu2', 'JissyuController@index');        /* Chapter2_実習問題_1 */

Route::get('jissyu3', 'jissyu3_1Controller@index');     /* Chapter3_1実習問題_1 */
Route::post('jissyu3', 'jissyu3_1Controller@post');

Route::get('jissyu4', 'jissyu3_2Controller@index');     /* Chapter3_2実習問題_2 */
Route::post('jissyu4', 'jissyu3_2Controller@post');

Route::get('jissyu5', 'jissyu3_3Controller@index');     /* Chapter3_３実習問題_３ */

Route::get('jissyu6', 'jissyu4_1Controller@index');     /* Chapter4_1実習問題*/
Route::post('jissyu6', 'jissyu4_1Controller@post');

Route::get('jissyu7', 'jissyu4_2Controller@index');     /* Chapter4_2実習問題*/
Route::post('jissyu7', 'jissyu4_2Controller@post');

// 効果測定

Route::get('kouka1_1', 'Kouka1_1Controller@index');       /* kouka1_1効果測定 */

Route::get('kouka1_2', 'Kouka1_2Controller@index');                     /* kouka1_2効果測定 */
Route::post('kouka1_2', 'Kouka1_2Controller@post');
