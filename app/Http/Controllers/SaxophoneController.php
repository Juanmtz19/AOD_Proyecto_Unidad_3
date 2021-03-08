<?php

namespace App\Http\Controllers;

use App\Models\Saxophone;
use Illuminate\Http\Request;

class SaxophoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saxophone = Saxophone::all();
        return view ('saxophone.index', compact ('saxophone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('saxophone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saxophone = request()->except('_token');
        saxophone::insert($saxophone);
        return redirect()->to(url('/saxophone'));
        //return view('saxophone.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saxophone  $saxophone
     * @return \Illuminate\Http\Response
     */
    public function show(Saxophone $saxophone)
    {
        return view ('saxophone.show', compact('saxophone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saxophone  $saxophone
     * @return \Illuminate\Http\Response
     */
    public function edit(Saxophone $saxophone)
    {
        return view ('saxophone.edit' , compact ('saxophone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saxophone  $saxophone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saxophone $saxophone)
    {
        $dataSaxophone = request()->except('_token');
        $saxophone->update($dataSaxophone);
        return redirect()->to(url('/saxophone'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saxophone  $saxophone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saxophone $saxophone)
    {
    $saxophone->delete();
    return redirect()->to(url('/saxophone'));
    }
}
