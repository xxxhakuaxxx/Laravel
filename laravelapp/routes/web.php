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

Route::get('hello/add', 'HelloController@add');

Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');

Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');

Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');

Route::get('person', 'PersonController@index');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

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

Route::get('jissyu10', 'jissyu5_1Controller@index');     /* Chapter5_1実習問題*/
Route::get('jissyu10/show', 'jissyu5_1Controller@show');

Route::get('jissyu11', 'Jissyu5_2Controller@index');     /* Chapter5_2実習問題*/
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'Jissyu5_2Controller@add');
Route::post('jissyu11/add', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'Jissyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');

Route::get('jissyu13', 'jissyu6_1Controller@index');     /* Chapter5_1実習問題*/
Route::get('jissyu13/find', 'jissyu6_1Controller@find');

// 効果測定

Route::get('kouka1_1', 'Kouka1_1Controller@index');       /* kouka1_1効果測定 */

Route::get('kouka1_2', 'Kouka1_2Controller@index');                     /* kouka1_2効果測定 */
Route::post('kouka1_2', 'Kouka1_2Controller@post');
