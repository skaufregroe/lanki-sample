@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Hello, Lanki Sample!</h1>
        <p class="lead">samle anki app!</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{route('login')}}" role="button">Login</a>
    </div>
@endsection