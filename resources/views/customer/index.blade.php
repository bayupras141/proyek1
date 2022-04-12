@extends('layouts.global')
@section('title', 'Customer')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Customers</h1>
          </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <a href="{{route('customer.create')}}" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success">
                
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
                                    <th class="" >No</th>
                                    <th class="" >Nik</th>
                                    <th class="" >Nama</th>
                                    <th class="" >Alamat</th>
                                    <th class="" >Email</th>
                                    <th class="" >Username</th>
                                    <th class="" >No hp</th>
                                    <th class="" >Jenis kelamin</th>
                                    <th class="" >Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                    <tr>      
                               
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->nik }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->username }}</td>
                                        <td>{{ $row->no_hp }}</td>
                                        <td>{{ $row->jenis_kelamin }}</td>
                                        <td>
                                            {{-- edit button customer with class pencil --}}
                                            <a href="{{ route('customer.edit', [$row->id]) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                            {{-- delete button customer with class trash --}}
                                            <form onsubmit="return confirm('Aakah anda yakin ingin menghapus?')" action="{{ route('customer.destroy', [$row->id]) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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