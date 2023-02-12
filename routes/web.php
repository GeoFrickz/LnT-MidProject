<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('update');
// });

Route::get('/karyawan',[DashboardController::class, 'getKaryawanPage'])->name('karyawanPage');

Route::get('/karyawan/add',[KaryawanController::class, 'getAddKaryawan'])->name('addKaryawanPage');
Route::post('/karyawan/add',[KaryawanController::class, 'addKaryawan'])->name('addKaryawan');

Route::get('/karyawan/update/{id}',[KaryawanController::class, 'getUpdateKaryawan'])->name('getUpdatePage');
Route::patch('/karyawan/update/{id}',[KaryawanController::class, 'updateKaryawan'])->name('updateKaryawan');

Route::delete('/karyawan/delete/{id}',[KaryawanController::class, 'deleteKaryawan'])->name('deleteKaryawan');