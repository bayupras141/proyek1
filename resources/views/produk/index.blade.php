
@extends('layouts.global')
@section('title', 'Produk')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Produk</h1>
          </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <a href="" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success">
                
            Tambah Data</a>

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
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Warna</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $row)
                                <tr>      
                               
                               <td>{{ $loop->iteration }}</td>
                               <td>{{ $row->nama }}</td>
                               <td>{{ $row->warna }}</td>
                                 <td>Rp {{ number_format($row->harga,0,',','.') }}</td>
                               <td>{{ $row->stok }}</td>
                               <td>
                               <a href="" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-primary">Edit</a>
                                <a id="btn-hapus" href="" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger">Hapus</a>
                                                           
                            </td></tr>
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