@extends('layouts.global')
@section('title', 'Tipe')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tipe</h1>
          </div>
          <div>
              {{-- create alert json succes message --}}
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
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
                            <table class="table table-bordered table-hover dataTable dtr-inline">
                                <thead>
                                <tr>
                                    <th>Merk</th>
                                    <th>Jenis</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipe as $row)
                                    <tr class="odd">
                                        <td>{{ $row->merk }}</td>
                                        <td>{{ $row->jenis }}</td>
                                        <td>
                                            <a href="{{ route('tipe.edit', [$row->id]) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                            <form onsubmit="return confirm('Aakah anda yakin ingin menghapus?')" action="{{ route('tipe.destroy', [$row->id]) }}" method="POST" class="d-inline">
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
    </div>
</div>
@endsection