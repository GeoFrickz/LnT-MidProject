<?php

namespace App\Http\Controllers;

use App\Http\Requests\KaryawanRequest;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function getAddKaryawan(){
        return view('add');
    }
    
    public function addKaryawan(KaryawanRequest $request){
        Karyawan::create([
            'nama' => $request -> nama,
            'umur' => $request -> umur,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp
        ]);

        return redirect(route('karyawanPage'));
    }

    public function getUpdateKaryawan($id){
        $karyawan = Karyawan::findOrFail($id);

        return view('update',compact('karyawan'));
    }

    public function updateKaryawan(KaryawanRequest $request, $id){
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->update([
            'nama' => $request -> nama,
            'umur' => $request -> umur,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp
        ]);

        return redirect(route('karyawanPage'));
    }

    public function deleteKaryawan($id){
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->delete();

        return redirect(route('karyawanPage'));
    }
}