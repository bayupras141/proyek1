@extends('layouts.global')
@section('title', 'CreateProduk')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Produk</h1>
          </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <form>
                <div class="card-body">
                    <div class="form-group">
                <label for="exampleInputNama">Nama Produk</label>
                <input type="nama" class="form-control" id="exampleInputNama" placeholder="Nama Produk">
              </div>
              <div class="form-group">
                <label for="exampleInputWarna">Warna Produk</label>
                <input type="name" class="form-control" id="exampleInputWarna" placeholder="Warna">
              </div>

            </div>
            <!-- /.card-body -->
            
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection