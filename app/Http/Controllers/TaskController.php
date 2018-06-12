<?php

namespace App\Http\Controllers;
use App\Task;


class TaskController extends Controller
{
    public function index(){


        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));

    }

    public function show(Task $task){
        //

       $tasks = Task::find($task);



        return view('tasks.show', compact('tasks'));
    }
}

