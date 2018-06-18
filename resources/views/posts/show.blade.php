@extends('layouts.layout')

@section('content')


    <div class="blog-post">

        <table id="customers">
            @foreach($post as $posts)
            <tr>
                <th>{{$posts->titel}}</th>

            </tr>
            <tr>
                <td>Inhoud:&nbsp;{{$posts->inhoud}}</td>

            </tr>
            <tr>
                <td>Eind datum:&nbsp;{{$posts->Einddatum}}</td>
            </tr>

            <tr>
                {{----}}
            </tr>
            <tr>
                {{----}}
            </tr>
                <button class="btn-primary">EDIT</button> <button class="btn-danger danger">DELETE</button>
@endforeach

        </table>
    </div>

@endsection