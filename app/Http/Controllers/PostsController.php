<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

       $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index',compact('posts'));
    }

    public function show(Post $post){

        $post = Post::find($post);

        return view('posts.show',compact('post'));
    }

    public function create(){

        return view('posts.create');
    }

    public function store(){

        Post::create(request(['titel','inhoud','Einddatum']));
//        Post::create([
//
//            'titel' => request('titel'),
//            'inhoud' => request('inhoud'),
//            'Einddatum' => request('Einddatum')
//        ]);

        return redirect('/');

    }

    public function edit($id){

        $post = Post::find($id);

        return view('posts.edit',compact('post'));

    }



}
