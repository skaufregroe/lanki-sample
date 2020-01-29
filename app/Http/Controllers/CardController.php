<?php

namespace App\Http\Controllers;

use App\Card;
use App\Ring;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ring $ring, Request $request)
    {
        $cards = Card::where('ring_id', $ring->id)->get();

        return view('cards.index', compact('cards', 'ring'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Ring $ring, Request $request)
    {
        return view('cards.create', compact('ring'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Ring $ring, Request $request)
    {
        $card = new Card($request->all());
        $card->save();

        return redirect()->route('rings.cards.show', [$ring, $ring]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Ring $ring, Card $card)
    {
        return view('cards.show', compact('ring', 'card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Ring $ring, Card $card)
    {
        return view('cards.edit', compact('ring', 'card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}
