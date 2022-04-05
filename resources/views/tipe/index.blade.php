@extends('layouts.global')
@section('title', 'Tipe')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tipe</h1>
          </div>
          <div class="col-sm-6">
            {{-- create buuton --}}
            <ol class="breadcrumb float-sm-right">
              <a href="{{route('tipe.create')}}" class="btn btn-primary">Tambah</a>
            </ol>

          </div><!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Table Tipe</h3>
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
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Merk</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Jenis</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipe as $row)
                                    <tr class="odd">
                                        <td>{{ $row->merk }}</td>
                                        <td>{{ $row->jenis }}</td>
                                        <td>
                                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-primary">Edit</a> 
                                            <a id="btn-hapus" href="" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger">Hapus</a>
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