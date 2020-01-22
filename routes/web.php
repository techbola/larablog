<?php

Route::get('/', 'BlogsController@index')->name('index');

Route::get('/blog', 'BlogsController@index')->name('blog');
Route::get('/blog/create', 'BlogsController@create')->name('blog.create');
Route::post('/blog/store', 'BlogsController@store')->name('blog.store');
Route::get('/blog/{id}', 'BlogsController@show')->name('blog.show');
Route::get('/blog/{id}/edit', 'BlogsController@edit')->name('blog.edit');
Route::patch('/blog/{id}/update', 'BlogsController@update')->name('blog.update');
Route::delete('/blog/{id}/delete', 'BlogsController@delete')->name('blog.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
