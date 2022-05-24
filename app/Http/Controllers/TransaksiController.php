<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller{
    public function index(){

        // return index with data
        return view('transaksi.index', [
            'data' => Transaksi::all()
        ]);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        $data = array('title' => 'Detail Transaksi');
        return view('transaksi.show', $data);
    }

    public function edit($id){
        $data = array('title' => 'Form Edit Transaksi');
        return view('transaksi.edit', $data);
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}