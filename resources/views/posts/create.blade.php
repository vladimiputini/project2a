@extends('layouts.layout')

@section('content')
<form class="form-signin" method="POST" action="/posts">

    {{  csrf_field() }}

    <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Takenlijst</h1>
        <p>Laravel 5.6</p>
    </div>
    <label for="Titel">Titel</label>
    <div class="form-label-group">

        <input type="text" name="titel" id="title" class="form-control"  required >

    </div>
    <label for="text">Inhoud</label>
    <div class="form-label-group">

        <input type="text" id="inhoud" class="form-control"  required>

    </div>
    <label for="text">Eind datum</label>
    <div class="form-label-group">

        <input type="date" id="datum" name="datum" class="form-control" placeholder="Datum" required>

    </div>


    <button class="btn btn-lg btn-primary btn-block" type="submit">verzend</button>
</form>

@endsection