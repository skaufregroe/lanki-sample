@extends('layouts.app')

@section('content')
    {{Form::model($card, ['route' => ['rings.cards.update', $ring, $card], 'method' => 'PUT'])}}
        {{Form::input('text', 'name', null, ['class' => 'form-control'])}}
        {{Form::input('text', 'description', null, ['class' => 'form-control'])}}
        {{Form::input('text', 'front', null, ['class' => 'form-control'])}}
        {{Form::input('text', 'back', null, ['class' => 'form-control'])}}
        {{Form::input('hidden', 'ring_id', null, ['class' => 'form-control'])}}
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {{Form::close()}}
@endsection