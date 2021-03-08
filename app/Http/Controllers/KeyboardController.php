<?php

namespace App\Http\Controllers;

use App\Models\Keyboard;
use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyboard = Keyboard::all();
        return view ('keyboard.index', compact('keyboard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('keyboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keyboard = request()->except('_token');
        keyboard::insert($keyboard);
        return redirect()->to(url('/keyboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function show(Keyboard $keyboard)
    {
        return view ('keyboard.show' , compact('keyboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Keyboard $keyboard)
    {
        return view ('keyboard.edit', compact('keyboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keyboard $keyboard)
    {
        $dataKeyboard = request()->except('_token');
        $keyboard->update($dataKeyboard);
        return redirect()->to(url('/keyboard'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keyboard $keyboard)
    {
        $keyboard>delete();
        return redirect()->to(url('/keyboard'));
    }
}
