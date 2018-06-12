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


Route::get('/tasks','TaskController@index');

Route::get('/tasks/{task}','TaskController@show');

