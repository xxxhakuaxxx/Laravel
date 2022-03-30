<?php

Route::resource('calendar', 'calendarController')
    ->middleware('auth');                /* 効果測定課題制作 */
Route::get('calendar/add', 'calendarController@add');
Route::post('calendar/create', 'calendarController@create');