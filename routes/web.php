<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PegawaiController::class, 'index']);


Route::get('Pegawai.edit', [PegawaiController::class, 'edit'])->name('edit');
Route::get('Pegawai.tambah', [pegawaiController::class, 'tambah'])->name('tambah');

Route::get('/Pegawai', [PegawaiController::class, 'index'])->name('getalldataPegawai');
Route::post('/Pegawai', [PegawaiController::class, 'createData'])->name('createDataPegawai');

Route::get('/Pegawai/get/{id}', [PegawaiController::class, 'getDataById'])->name('getDataByIdPegawai');
Route::post('/Pegawai/update/{id}', [PegawaiController::class, 'updateData'])->name('updateDataPegawai');
Route::delete('/Pegawai/delete/{id}', [PegawaiController::class, 'deleteData'])->name('deleteDataPegawai');