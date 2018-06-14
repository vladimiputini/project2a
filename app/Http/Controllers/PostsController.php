<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

        return view('posts.index');
    }

    public function show(){
        return view('posts.show');
    }

    public function create(){

        return view('posts.create');
    }

    public function store(){

        $post = new Post;

        $post->titel = request('titel');
        $post->inhoud = request('inhoud');

        //save in to db

        $post->save();

        return redirect('/');

    }



}
