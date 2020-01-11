@extends('layouts.app')

@section('content')
    <h2>{{ $ring->name }}</h2>

    <a href="{{ route('rings.edit', $ring)}}" class="btn btn-danger">Edit Ring</a>
@endsection