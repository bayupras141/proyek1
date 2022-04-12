@extends('layouts.global')
@section('title', 'Customer')
@section('contentHeader')
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-0">
            <h5 class="m-0">Tambah Customers</h5>
          </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container mt-10">
   
   <div class="row justify-content-center align-items-center">
       <div class="card" style="width: 150rem;">
           <div class="card-body">
            
           <form method="post" action="{{ route('customer.store') }}" enctype="multipart/form-data" class="d-inline">
           @csrf
           <div class="form-group">
                   <label for="nama">Nama</label>                    
                   <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" >                
               </div>

               <div class="form-group">
                   <label for="alamat">Alamat</label>                    
                   <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" >                
               </div>

               <div class="form-group">
                   <label for="nik">Nik</label>                    
                   <input type="text" name="nik" class="form-control" id="nik" aria-describedby="nik" >                
               </div>

               <div class="form-group">
                   <label for="email">Email</label>                    
                   <input type="text" name="email" class="form-control" id="email" aria-describedby="email" >                
               </div>

               <div class="form-group">
                   <label for="username">Username</label>                    
                   <input type="text" name="username" class="form-control" id="username" aria-describedby="nama" >                
               </div>

               <div class="form-group">
                   <label for="password">Password</label>                    
                   <input type="password" name="password" class="form-control" id="password" aria-describedby="password" >                
               </div>

               <div class="form-group">
                   <label for="no_hp">No Hp</label>                    
                   <input type="text" name="no_hp" class="form-control" id="no_hp" aria-describedby="no_hp" >                
               </div>
               <div class="form-group">
                   <label for="jenis_kelamin">Jenis Kelamin</label>                    
                   <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" aria-describedby="jenis_kelamin" >                
               </div>
               
           <button type="submit" class="btn btn-primary">Submit</button>
           </form>
           <a href="{{ route('customer.index') }}" class="btn btn-secondary">Back</a>
           </div>
       </div>
   </div>
   </div>
@endsection