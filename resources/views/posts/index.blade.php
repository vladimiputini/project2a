@extends('layouts.layout')


    @section('content')
        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-12">

                    <h1 class="my-4">Informatie
                        <small>Jouw taken</small>
                    </h1>

                    <!-- Blog Post -->
                    @foreach($posts as $post)
                    @include('posts.post')
                    @endforeach
            </div>
        </div>
        </div>

    @endsection