<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //jika tampilan hasil bukan pagination
		$bank = DB::table('bank')->paginate(10);
    	// mengirim data bank ke view index
    	return view('indexbank',['bank' => $bank]);


    }

	public function tambah()
	{

		// memanggil view tambah
		return view('tambahbank');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('bank')->insert([
			'merkbank' => $request->merk,
			'jumlahbank' => $request->jumlah,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/bank');

	}

	// method untuk edit data bank
	public function edit($id)
	{
		// mengambil data bank berdasarkan id yang dipilih
		$bank = DB::table('bank')->where('kodebank',$id)->get();
		// passing data bank yang didapat ke view edit.blade.php
		return view('editbank',['bank' => $bank]);

	}

	// update data bank
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('bank')->where('kodebank',$request->id)->update([
			'merkbank' => $request->merk,
			'jumlahbank' => $request->jumlah,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman bank
		return redirect('/bank');
	}

	// method untuk hapus data bank
	public function hapus($id)
	{
		// menghapus data bank berdasarkan id yang dipilih
		DB::table('bank')->where('kodebank',$id)->delete();

		// alihkan halaman ke halaman bank
		return redirect('/bank');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;
		$bank = DB::table('bank')
		->where('merkbank','like',"%".$cari."%")
		->paginate();

		return view('indexbank',['bank' => $bank]);
	}
}
