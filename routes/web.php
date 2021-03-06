<?php

Route::get('/',             'PostsController@index');

Route::get('posts/index',   'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts',       'PostsController@store');

Route::get('/posts/{post}/', 'PostsController@show');

Route::get('/posts/{id}/edit',      'PostsController@edit')->name('editpost');

Route::patch('/posts/{id}/edit',      'PostsController@update')->name('updatepost');

Route::delete('/posts/{id}/index',      'PostsController@delete')->name('deletepost');



?>