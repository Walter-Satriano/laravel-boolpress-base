<?php

Route::get('/', 'BlogController@index') -> name('home-page');

Route::get('/category/{id}', 'BlogController@showCategory') -> name('categories');
Route::get('/post/{id}', 'BlogController@showPost') -> name('posts');

Route::get('/admin/post/create', 'BlogController@create') -> name('create.post');
Route::post('/admin/post/store', 'BlogController@store') -> name('store.post');

Route::get('/admin/post/edit/{id}', 'BlogController@edit') -> name('edit.post');
Route::post('/admin/post/update/{id}', 'BlogController@update') -> name('update.post');

Route::get('/admin/post/destroy/{id}', 'BlogController@destroy') -> name('destroy.post');
