<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller{
    public function index(){
<<<<<<< HEAD
        return view('transaksi.index', [
            'transaksi' => Transaksi::all()
=======

        // return index with data
        return view('transaksi.index', [
            'data' => Transaksi::all()
>>>>>>> 1989eff0cda8476d0abec0a0e37ef96f9632d455
        ]);
    }

    public function create(){
        //
        return view('transaksi.create');
    }

    public function store(Request $request){
        //
        $request->validate([
            'invoice' => 'required',
            'total_bayar' => 'required',
            'diskon' => 'required',
            'ongkir' => 'required',
            'status' => 'required',
            'customer_id' => 'required',
            'produk_id' => 'required'
        ]);

        // create new tipe
        $transaksi = new Transaksi;
        $transaksi->invoice = $request->invoice;
        $transaksi->total_bayar = $request->total_bayar;
        $transaksi->diskon = $request->diskon;
        $transaksi->ongkir = $request->ongkir;
        $transaksi->status = $request->status;
        $transaksi->customer_id = $request->customer_id;
        $transaksi->produk_id = $request->produk_id;
        $transaksi->save();

        // return to tipe.index wirt success message
        return redirect()->route('transaksi.index')->with('status', 'Transaksi berhasil ditambahkan');
    }

    public function show($id){
       
    }

    public function edit($id){
        return view('transaksi.edit', ['transaksi' => $transaksi]);
    }

    public function update(Request $request, $id){
        //
        $request->validate([
            'invoice' => 'required',
            'total_bayar' => 'required',
            'diskon' => 'required',
            'ongkir' => 'required',
            'status' => 'required',
            'customer_id' => 'required',
            'produk_id' => 'required'
        ]);
    }

    public function destroy($id){
        //
        $transaksi->delete();
        // return to tipe.index wirt success message
        return redirect()->route('transaksi.index')->with('status', 'Transaksi berhasil dihapus');
    }
}