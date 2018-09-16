@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">    
        <h1>{{$title}}</h1>
        <p>This is the laravel application from the "Laravel from scratch youtube series"</p>
        <p><a href="/login" role="button" class="btn btn-primary btn-lg">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection
