@extends('layouts.app')

@section('content')
    {{Form::open(['route' => ['rings.cards.store', $ring]])}}
        {{Form::input('text', 'name', null, ['class' => 'form-control'])}}
        {{Form::input('text', 'description', null, ['class' => 'form-control'])}}
        {{Form::input('text', 'front', null, ['class' => 'form-control'])}}
        {{Form::input('text', 'back', null, ['class' => 'form-control'])}}
        {{Form::input('hidden', 'ring_id', $ring->id, ['class' => 'form-control'])}}
        {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
    {{Form::close()}}
@endsection