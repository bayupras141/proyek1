<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Tipe;
use DB;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create return view Produk.index
        return view('produk.index', [
            'produk' => Produk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tipe()
    {
    	return $this->hasMany(Tipe::class, 'id');
    }

    public function create()
    {
        // return to Produk.create
        $type = Tipe::get();
        return view('produk.create', compact('type'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new Produk();
        $produk -> nama = $request-> get('nama');
        $produk -> warna = $request-> get('warna');
        $produk -> harga = $request-> get('harga');
        $produk -> stok = $request-> get('stok');
        $produk -> type_id = $request-> get('type_id');
        
        $produk->  save();

        //jika data berhasil ditambahkan, akan kembali ke halaman  dengan status success dan menampilkan pesan data berhasil ditambahkan
        return redirect()->route('produk.index')
            ->with('status', 'Produk Berhasil Ditambahkan');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $Produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $Produk)
    {
        $type = Tipe::get();
        return view('produk.edit', ['produk' => $Produk], compact('type'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $produk -> nama = $request-> get('nama');
        $produk -> warna = $request-> get('warna');
        $produk -> harga = $request-> get('harga');
        $produk -> stok = $request-> get('stok');
        $produk -> type_id = $request-> get('type_id');
        
        $produk->  save();

        // return to tipe.index wirt success message
        return redirect()->route('produk.index')->with('status', 'Produk berhasil diubah');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $Produk)
    {
        $Produk->delete();
        // return to tipe.index wirt success message
        return redirect()->route('produk.index')->with('status', 'Produk berhasil dihapus');
        //
    }
}