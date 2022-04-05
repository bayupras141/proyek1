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

            <form>
                <div class="card-body">
                    <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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