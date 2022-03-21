@extends('layouts.master')
@section('link')
<li class="menu-header">Paket</li>
<li ><a class="nav-link" href="{{route ('dashboard')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
<li class="menu-header">Content</li>
@if (auth()->user()->role=="admin") 
<li class="active"><a class="nav-link" href="{{route ('tampil-outlet')}}"><i class="fas fa-home"></i> <span>Outlet</span></a></li>
<li ><a class="nav-link" href="{{route ('tampil-paket')}}"><i class="fas fa-box"></i> <span>Paket Laundry</span></a></li>
@endif
<li ><a class="nav-link" href="{{route ('tampil-member')}}"><i class="fas fa-user"></i> <span>Member</span></a></li>
<li ><a class="nav-link" href="{{route ('tampil-transaksi')}}"><i class="fas fa-file-invoice-dollar"></i> <span>Transaksi</span></a></li>
@if (auth()->user()->role=="admin") 
<li ><a class="nav-link" href="{{route ('tampil-user')}}"><i class="fas fa-user-tie"></i> <span>Data Pengurus</span></a></li>
@endif
@stop
@section('content')
    <div class="section-body">
      <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Kelola Akun</h4>
                        </div>
                        <form action="{{route ('simpan-user')}}" method="POST">
                          @csrf
                        <div class="card-body">
                          
                          <div class="form-group">
                            <label>Nama :</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                            <label 
                            @error('name') 
                            class="text-danger"
                            @enderror>
                            @error('name')
                            {{$message}}
                            @enderror
                          </label>
                          </div>
                          
                          <div class="form-group">
                            <label>Role :</label>
                            <br>
                            <select class="form-control col-md-2" name="role">
                            <option value="" selected>--Pilih--</option>
                            <option value="admin">Admin</option>
                            <option value="kasir">Kasir</option>
                            <option value="owner">Owner</option>
                            </select> 
                            <label
                            @error('role') 
                            class="text-danger"
                            @enderror>
                            @error('role')
                            {{$message}}
                            @enderror
                          </label>
                          </div>

                          <div class="form-group">
                            <label>Email :</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control">
                            <label 
                            @error('email') 
                            class="text-danger"
                            @enderror>
                            @error('email')
                            {{$message}}
                            @enderror
                          </label>
                          </div>

                          <div class="form-group">
                            <label>Password :</label>
                            <input type="password" name="password" value="{{old('password')}}" class="form-control">
                            <label 
                            @error('password') 
                            class="text-danger"
                            @enderror>
                            @error('password')
                            {{$message}}
                            @enderror
                          </label>
                          </div>
                          
                          <button class="btn btn-success btn-gradient" type="submit">Tambah</button>
                          <button class="btn btn-danger btn-gradient" type="reset">Reset</button>
                        
                        </form>
                  </div>
            </div>
         </div>

    </div>
@stop



@push('scripts')

@endpush