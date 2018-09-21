<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;
use App\Requests\StoreBand;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('band.list',  ['bands' => Band::paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('band.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreBand  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBand $request)
    {
        $band = new Band($request->all());
        $band->save();
        return redirect('/bands');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band)
    {
        return view('band.show',  ['band' => $band]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        return view('band.edit',  ['band' => $band]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\StoreBand  $request
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBand $request, Band $band)
    {
        $band->fill($request->all());
        return redirect('/bands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $band)
    {
        $band->delete();
        return redirect('/bands');
    }
}
