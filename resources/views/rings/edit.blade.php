@extends('layouts.app')

@section('content')
    {{Form::model($ring, ['route' => ['rings.update', $ring->id], 'method' => 'PUT'])}}
        {{Form::input('text', 'name', null, ['class' => 'form-control'])}}
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {{Form::close()}}
@endsection