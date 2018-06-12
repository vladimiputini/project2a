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
Route::get('/tasks', function () {

    //these means he will get all info from tasks table from the DB
    $tasks = DB::table('tasks')->latest()->get();

    return view('tasks.index', compact('tasks'));
});

Route::get('tasks/{task}', function ($id) {

    //Searche Tasks by id
    $tasks = DB::table('tasks')->find($id);

    return view('tasks.show', compact('tasks'));
});


