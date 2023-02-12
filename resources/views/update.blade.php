@extends('layout.app')

@section('title', 'Ubah Data Karyawan')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-5">
        <form class="container bg-light shadow p-5 rounded-4" action="{{route('updateKaryawan',[$karyawan->id])}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="d-flex justify-content-center">
                <h2>Ubah Data Karyawan</h2>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" placeholder="Masukkan nama anda" value="{{$karyawan->nama}}">
            </div>
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur</label>
            <input type="number" class="form-control" name="umur" placeholder="Masukkan umur anda" value="{{$karyawan->umur}}">
            </div>
            @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan alamat anda" value="{{$karyawan->alamat}}">{{$karyawan->alamat}}</textarea>
            </div>
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomor telepon</label>
            <input type="tel" class="form-control" name="no_telp" placeholder="Masukkan nomor telepon anda" value="{{$karyawan->no_telp}}">
            </div>
            @error('no_telp')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection