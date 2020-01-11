@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($rings as $ring)
            <div class="card col-md-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $ring->name }}</h5>
                    <a href="{{ route('rings.show', $ring) }}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="m-3">
        <a href="{{ route('rings.create')}}" class="btn btn-primary">New Ring</a>
    </div>
@endsection