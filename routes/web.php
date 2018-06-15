<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// example.com/.. it wil return the view welcome, so you will be returned to welcome.blade.php
//Route::get('/tasks', function () {
//
//    //these means he will get all info from tasks table from the DB
////    $tasks = DB::table('tasks')->latest()->get();

//});

Route::get('/','PostsController@index');

Route::get('posts/index','PostsController@index' );

Route::get('/posts/{posts}', 'PostsController@show');

Route::get('/posts/create','PostsController@create' );

Route::post('/posts','PostsController@store');