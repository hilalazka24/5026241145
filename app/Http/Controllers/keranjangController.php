<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class keranjangController extends Controller
{
    public function index_keranjang()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); --> JIKA TIDAK PAKAI PAGINATE
        $keranjang = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
    	return view('keranjang_index', ['keranjang' => $keranjang]);

    }

    // method untuk menampilkan view form tambah
	public function beli()
	{

		// memanggil view tambah
		return view('keranjang_create');

	}

	// method untuk insert data ke table
	public function storeKeranjang(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->kode,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga,
		]);
		// alihkan halaman ke halaman keranjang
		return redirect('/keranjangbelanja');

	}

	// method untuk batal
	public function batal($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}
