<?php
Route::get('/', 'FrontpageController@index');

Route::resource('order','OrderController');
