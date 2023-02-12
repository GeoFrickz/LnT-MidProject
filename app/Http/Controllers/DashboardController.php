<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getKaryawanPage(){
        $karyawans = Karyawan::all();

        return view('karyawan',compact('karyawans'));
    }

    public function getAddPage(){
        return view('add');
    }

    public function getUpdatePage(){
        return view('update');
    }
}
