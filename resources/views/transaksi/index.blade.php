@extends('layouts.global')
@section('title', 'Transaksi')
@section('contentHeader')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Data Transaksi
                    </h3>
                </div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Invoice</th>
                <th>Sub Total</th>
                <th>Diskon</th>
                <th>Ongkir</th>
                <th>Total</th>
                <th>Status Pembayaran</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                {{-- loop data --}}
                @foreach($data as $key => $row)
                <tr>
                    <td>{{ $row->invoice }}</td>
                    <td>{{ $row->total_bayar }}</td>
                    <td>{{ $row->diskon }}</td>
                    <td>{{ $row->ongkir }}</td>
                    <td>{{ $row->total_bayar }}</td>
                    <td>{{ $row->status }}</td>
                    <td>
                        {{-- <a href="{{ route('transaksi.show', 1)}}" class="btn btn-sm btn-info mb-2">
                            Detail
                        </a> --}}
                        {{-- <a href="{{ route('transaksi.edit', 1)}}" class="btn btn-sm btn-primary mb-2">
                            Edit
                        </a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
@endsection
                    