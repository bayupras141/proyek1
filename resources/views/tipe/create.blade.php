@extends('layouts.global')
@section('title', 'CreateTipe')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Tipe</h1>
          </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form class="d-inline" method="post" action="{{ route('tipe.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" name="merk" class="form-control" id="merk" placeholder="Enter Merk">
              </div>
              <div class="form-group">
                <label for="jenis">Jenis</label>
                <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Jenis">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="{{ route('tipe.index') }}" class="btn btn-secondary">Back</a>
          </div>
          <!-- /.card-body -->
      </div>
    </div>
</div>
@endsection