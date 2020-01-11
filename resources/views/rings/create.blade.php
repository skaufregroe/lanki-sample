@extends('layouts.app')

@section('content')
    {{Form::open(['route' => 'rings.store'])}}
        {{Form::input('text', 'name', null, ['class' => 'form-control'])}}
        {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
    {{Form::close()}}
@endsection