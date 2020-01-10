<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', 'BlogsController@index');
Route::get('/blog/create', 'BlogsController@create');
Route::post('/blog/store', 'BlogsController@store')->name('blog.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
