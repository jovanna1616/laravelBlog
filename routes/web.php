<?php

Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/{id}/comment', 'CommentsController@store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
