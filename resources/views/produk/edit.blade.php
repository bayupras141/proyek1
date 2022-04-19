@extends('layouts.global')
@section('title', 'EditProduk')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Produk</h1>
          </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-body">
          <form method="post" action="{{ route('produk.update', [$produk->id]) }}" enctype="multipart/form-data" class="d-inline">
        @csrf
            <div class="card-body">
            <div class="form-group">
                <label for="exampleInputNama">Nama Produk</label>
                <input type="text" class="form-control" name="nama" id="exampleInputNama" placeholder="Nama Produk" value="{{ $produk->nama }}">
              </div>
              <div class="form-group">
                <label for="exampleInputWarna">Warna Produk</label>
                <input type="text" class="form-control" name="warna" id="exampleInputWarna" placeholder="Warna" value="{{ $produk->warna }}">
              </div>
              <div class="form-group">
                <label for="exampleInputHarga">Harga Produk</label>
                <input type="text" class="form-control" name="harga" id="exampleInputHarga" placeholder="Harga" value="{{ $produk->harga }}">
              </div>
              <div class="form-group">
                <label for="exampleInputStok">Stok Produk</label>
                <input type="text" class="form-control" name="stok" id="exampleInputStok" placeholder="Stok" value="{{ $produk->stok }}">
              </div>
              <div class="form-group{{ $errors->has('type_id') ? ' has-error' : '' }}">
                <label for="type_id">Type Id</label>
             <select class="form-control" name="type_id" id="type_id" value="{{ $produk->type_id }}">
                                <option value="">(Cari Tipe)</option>
                                @foreach ($type as $tipe)
                                <option value="{{$tipe->id}}">{{$tipe->id}}</option>
                                @endforeach
              </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            {{-- button back --}}
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Back</a>
          </div>
          <!-- /.card-body -->
      </div>
    </div>
</div>
@endsection