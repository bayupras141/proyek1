@extends('layouts.global')
@section('title', 'CreateTransaksi')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Transaksi</h1>
          </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form class="d-inline" method="post" action="{{ route('transaksi.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="invoice">Invoice</label>
                <input type="text" name="invoice" class="form-control" id="invoice" placeholder="Enter Invoice">
                </div>

                <div class="form-group">
                <label for="total_bayar">Total Bayar</label>
                <input type="text" name="total_bayar" class="form-control" id="total_bayar" placeholder="total bayar" >
                </div>

                <div class="form-group">
                <label for="diskon">Diskon</label>
                <input type="text" name="diskon" class="form-control" id="diskon" placeholder="diskon" >
                </div>

                <div class="form-group">
                <label for="ongkir">Ongkir</label>
                <input type="text" name="ongkir" class="form-control" id="ongkir" placeholder="ongkir" >
                </div>

                <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" id="status" placeholder="Enter status" >
                </div>

                <div class="form-group">
                <label for="customer_id">Customer ID</label>
                <input type="text" name="customer_id" class="form-control" id="customer_id" placeholder="Enter customer_id" >
                </div>

                <div class="form-group">
                <label for="produk_id">Produk ID</label>
                <input type="text" name="produk_id" class="form-control" id="produk_id" placeholder="Enter produk id" >
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Back</a>
          </div>
          <!-- /.card-body -->
      </div>
    </div>
</div>
@endsection