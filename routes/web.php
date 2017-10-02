<?php

Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/{id}/comment', 'CommentsController@store');


// registration
Route::get('/registration', 'RegistrationController@index');
Route::post('/registration', 'RegistrationController@create');

// login
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@authenticate');

