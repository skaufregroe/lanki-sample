<?php

namespace App\Http\Controllers;

use App\Ring;
use Illuminate\Http\Request;

class RingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rings = Ring::all();

        return view('rings.index', compact('rings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ring = new Ring($request->all());

        $ring->save();

        return redirect()->route('rings.show', $ring);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function show(Ring $ring)
    {
        return view('rings.show', compact('ring'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function edit(Ring $ring)
    {
        return view('rings.edit', compact('ring'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ring $ring)
    {
        $ring->update($request->all());

        return redirect()->route('rings.show', $ring);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ring  $ring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ring $ring)
    {
        //
    }
}
