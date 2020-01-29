@extends('layouts.app')

@section('content')

    <h1>All Cards for {{$ring->name}}</h1>

    @if (empty($cards))
        <h2>No Cards!</h2>
    @else

    <div class="row">
        @foreach($cards as $card)
            <div class="card col-md-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $card->name }}</h5>
                    <a href="{{ route('rings.cards.show', $card) }}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>

    @endif

    <div class="m-3">
        <a href="{{ route('rings.cards.create', $ring)}}" class="btn btn-primary">New Card</a>
    </div>
@endsection