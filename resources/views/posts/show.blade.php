@extends('layouts.layout')

@section('content')

            {{--@foreach($post as $posts)--}}
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="navbar navbar-inverse">
        <ul class="nav">
            <li><a href="{{ URL::to('/') }}">View All Post</a></li>
            <li><a href="{{ URL::to('/posts/create') }}">Create</a></li>
            <li><a href="{{ URL::route('editpost',$post->id) }}">Edit</a></li>
            {{--{{Fout zit in de url naar edit}}--}}
        </ul>
    </div>

    <h1>Showing {{ $post->titel }}</h1>
    {{--<h1>Showing {{ $post->id }}</h1>--}}

    <div class="jumbotron text-center">
        <h2>{{ $post->titel }}</h2>
        <p>
            {{--<input type="hidden" value="{{$post->find()}}">--}}
            <strong>Inhoud:</strong> {{ $post->inhoud }}<br>
            <strong>Einddatum:</strong> {{ $post->Einddatum }}
        </p>
    </div>
    {{ Form::open(['route' => ['deletepost', $post->id], 'method' => 'delete']) }}
    {{Form::submit('delete',['class'=>'btn btn-danger'])}}
    {{ Form::close() }}
</div>
</body>
</html>
{{--@endforeach--}}


@endsection