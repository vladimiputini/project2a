<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Session;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

       $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index',compact('posts'));
    }

    public function show(Post $post){

        $post = Post::find($post->id);

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

        return view('posts.edit', compact('post'));

    }

    public function update(Request $request,$id){

        //1# Store the data
        $post = Post::find($id);

       $post->titel = $request->input('titel');
       $post->inhoud = $request->input('inhoud');
       $post->Einddatum = $request->input('Einddatum');

////        $nerd = Nerd::find($id);
//        $post->titel       = Input::get('titel');
//        $post->inhoud      = Input::get('inhoud');
//        $post->Einddatum   = Input::get('Einddatum');

        $post->save();

//
        return view('posts.show',compact('post'));




    }

    public function delete($id){
        //find the post by ID
        $posts = Post::find($id)->delete();

//        $posts->forcedelete();

//        Session::flash('success', 'The post was successfully deleted.');
        return redirect('/');
    }





}
