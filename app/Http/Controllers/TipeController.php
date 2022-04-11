<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create return view tipe.index
        return view('tipe.index', [
            'tipe' => Tipe::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return to tipe.create
        return view('tipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'merk' => 'required',
            'jenis' => 'required'
        ]);

        // create new tipe
        $tipe = new Tipe;
        $tipe->merk = $request->merk;
        $tipe->jenis = $request->jenis;
        $tipe->save();

        // return to tipe.index wirt success message
        return redirect()->route('tipe.index')->with('success', 'Tipe berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function show(Tipe $tipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipe $tipe)
    {
        // return to tipe.edit
        return view('tipe.edit', [
            'tipe' => $tipe
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipe $tipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipe $tipe)
    {
        $tipe->delete();
    }
}
