@extends('layouts.global')
@section('title', 'CreateTipe')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Transaksi</h1>
          </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form method="post" action="{{ route('transaksi.update', [$transaksi->id]) }}" enctype="multipart/form-data" class="d-inline">
                @csrf
                @method('PUT')
                <div class="form-group">
                <label for="invoice">Invoice</label>
                <input type="text" name="invoice" class="form-control" id="invoice" placeholder="Enter Invoice" value="{{ $transaksi->invoice }}">
                </div>

                <div class="form-group">
                <label for="total_bayar">Total Bayar</label>
                <input type="text" name="total_bayar" class="form-control" id="total_bayar" placeholder="total bayar" value="{{ $transaksi->total_bayar }}">
                </div>

                <div class="form-group">
                <label for="diskon">Diskon</label>
                <input type="text" name="diskon" class="form-control" id="diskon" placeholder="diskon" value="{{ $transaksi->diskon }}">
                </div>

                <div class="form-group">
                <label for="ongkir">Ongkir</label>
                <input type="text" name="ongkir" class="form-control" id="ongkir" placeholder="ongkir" value="{{ $transaksi->ongkir }}">
                </div>

                <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" id="status" placeholder="Enter status" value="{{ $transaksi->status }}">
                </div>

                <div class="form-group">
                <label for="customer_id">Customer ID</label>
                <input type="text" name="customer_id" class="form-control" id="customer_id" placeholder="Enter customer_id" value="{{ $transaksi->customer_id }}">
                </div>

                <div class="form-group">
                <label for="produk_id">Produk ID</label>
                <input type="text" name="produk_id" class="form-control" id="produk_id" placeholder="Enter produk id" value="{{ $transaksi->produk_id }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            {{-- button back --}}
            <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Back</a>
          </div>
          <!-- /.card-body -->
      </div>
    </div>
</div>
@endsection