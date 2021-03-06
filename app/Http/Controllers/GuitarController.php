<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guitar = Guitar::all();
        return view ('guitar.index', compact('guitar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view ('guitar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guitar = request()->except('_token');
        guitar::insert($guitar);
        return redirect()->to(url('/guitar'));
        //return view('guitar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        return view ('guitar.show' , compact('guitar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        return view ('guitar.edit', compact('guitar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guitar $guitar)
    {
        $dataGuitar = request()->except('_token');
        $guitar->update($dataGuitar);
        return redirect()->to(url('/guitar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guitar $guitar)
    {
        $guitar->delete();
        return redirect()->to(url('/guitar'));
    }
}
