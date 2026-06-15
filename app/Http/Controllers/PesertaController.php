<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{
    // Menampilkan semua data dengan pagination
    public function index()
    {
        $peserta = DB::table('nilai_peserta')->paginate(10); // paginate agar links() berfungsi
        return view('peserta_index', compact('peserta'));
    }

    // Form tambah data
    public function tambah()
    {
        return view('peserta_tambah');
    }

    // Simpan data baru (ID auto increment, tidak perlu dikirim)
    public function store(Request $request)
    {
        DB::table('nilai_peserta')->insert([
            'nopeserta'    => $request->nopeserta,
            'nilaiteori'   => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek
        ]);

        return redirect('/eas')->with('success', 'Data berhasil ditambahkan');
    }
}
