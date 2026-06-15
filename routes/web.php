<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('pert1', function () {
	return view('intro');
});

Route::get('pert2', function () {
	return view('news1');
});

Route::get('pert3', function () {
	return view('responsive');
});

Route::get('task-tm3', function () {
	return view('task-tm3');
});

Route::get('pert4', function () {
	return view('145');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('menu', function () {
	return view('portal');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//ROUTE CRUD pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/keranjangbelanja', [keranjangController::class, 'index_keranjang']);
Route::get('/keranjangbeli/{id}', [keranjangController::class, 'beli']);
Route::post('/keranjangstore', [keranjangController::class, 'storeKeranjang']);
Route::get('/keranjangbatal/{id}', [keranjangController::class, 'batal']);

// CRUD table kabel (Adaptasi dari pegawai)
Route::get('/bank', [BankController::class, 'index']);
Route::get('/bank/tambah', [BankController::class, 'tambah']);
Route::post('/bank/store', [BankController::class, 'store']);
Route::get('/bank/edit/{id}', [BankController::class, 'edit']);
Route::post('/bank/update', [BankController::class, 'update']);
Route::get('/bank/hapus/{id}', [BankController::class, 'hapus']);
Route::get('/bank/cari', [BankController::class, 'cari']);

//Route crud Nilai
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilai', [NilaiController::class, 'store'])->name('nilaikuliah.store');

//Siswa
//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//Route Peserta
Route::get('/eas', [PesertaController::class, 'index'])->name('peserta.index');
Route::get('/eas/tambah', [PesertaController::class, 'tambah'])->name('peserta.tambah');
Route::post('/eas/store', [PesertaController::class, 'store'])->name('peserta.store');
