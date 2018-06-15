@extends('layouts.layout')

@section('content')


    <div class="blog-post">

        <table id="customers">
            <tr>
                <th>{{$post->titel}}</th>

            </tr>
            <tr>
                <td>Inhoud:&nbsp;{{$post->inhoud}}</td>

            </tr>
            <tr>
                <td>Eind datum:&nbsp;{{$post->Einddatum}}</td>
            </tr>

            <tr>
                {{----}}
            </tr>
            <tr>
                {{----}}
            </tr>
        </table>


    </div>

    @endsection