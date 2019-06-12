<?php

Route::get('/', 'AuthController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
