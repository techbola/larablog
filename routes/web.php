<?php

Route::get('/', 'BlogsController@index')->name('index');

Route::get('/blog', 'BlogsController@index')->name('blog');
Route::get('/blog/create', 'BlogsController@create')->name('blog.create');
Route::post('/blog/store', 'BlogsController@store')->name('blog.store');

Route::get('/blog/trash', 'BlogsController@trash')->name('blog.trash');
Route::get('/blog/{id}/restore', 'BlogsController@restore')->name('blog.restore');
Route::delete('/blog/{id}/permanent-delete', 'BlogsController@permanentDelete')->name('blog.permanent-delete');

Route::get('/blog/{id}', 'BlogsController@show')->name('blog.show');
Route::get('/blog/{id}/edit', 'BlogsController@edit')->name('blog.edit');
Route::patch('/blog/{id}/update', 'BlogsController@update')->name('blog.update');
Route::delete('/blog/{id}/delete', 'BlogsController@delete')->name('blog.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin routes
Route::get('/admin', 'AdminController@index')
        ->name('admin.index');

Route::resource('categories', 'CategoryController');