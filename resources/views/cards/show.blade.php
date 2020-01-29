@extends('layouts.app')

@section('content')
    <h1>{{$ring->name }}</h1>

    {{$card->name }}
    {{$card->description}}
    {{$card->front}}
    {{$card->back}}
    {{$card->ring_id}}
@endsection