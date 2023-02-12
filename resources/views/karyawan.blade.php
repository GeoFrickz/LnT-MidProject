@extends('layout.app')

@section('title', 'Daftar Karyawan')

@section('content')
<div style="display: flex; gap: 10px; align-items: center">
    <h1>Daftar Karyawan</h1>
    <a href="{{route('addKaryawanPage')}}"><button type="button" class="btn btn-primary">Tambahkan Karyawan</button></a>
</div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. telp</th>
        <th scope="col">Edit/Hapus</th>
    </tr>
    </thead>
    <tbody>
        @php
            $count=1;
        @endphp
        @foreach ($karyawans as $karyawan)    
        <tr>
            <th scope="row">{{$count++}}</th>
            <td>{{$karyawan->nama}}</td>
            <td>{{$karyawan->umur}}</td>
            <td>{{$karyawan->alamat}}</td>
            <td>{{$karyawan->no_telp}}</td>
            <td>
                <div style="display: flex; gap: 10px">
                    <a href="{{route('getUpdatePage',[$karyawan->id])}}">
                        <button type="button" class="btn btn-success"><i class="uil uil-edit"></i></button>
                    </a>
                    <form action="{{route('deleteKaryawan',[$karyawan->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="uil uil-trash-alt"></i></button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection