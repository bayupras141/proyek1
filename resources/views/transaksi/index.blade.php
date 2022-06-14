@extends('layouts.global')
@section('title', 'Transaksi')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Transaksi</h1>
          </div>
          <div class="col-sm-6">
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
          </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('transaksi.create') }}" class="btn btn-primary float-right">
                            <i class="fas fa-plus"></i> Add Tipe
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-hover dataTable dtr-inline">
                                <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Total Bayar</th>
                                    <th>Diskon</th>
                                    <th>Ongkir</th>
                                    <th>Status</th>
                                    <th>Customer ID</th>
                                    <th>Produk ID</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                    <tr class="odd">
                                        <td>{{ $row->invoice }}</td>
                                        <td>{{ $row->total_bayar }}</td>
                                        <td>{{ $row->diskon }}</td>
                                        <td>{{ $row->ongkir }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>{{ $row->customer_id }}</td>
                                        <td>{{ $row->produk_id }}</td>
                                        <td>
                                            <a href="{{ route('transaksi.edit', [$row->id]) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                            <form onsubmit="return confirm('Apakah anda yakin ingin menghapus?')" action="{{ route('transaksi.destroy', [$row->id]) }}" method="POST" class="d-inline">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
          </div>  
@endsection