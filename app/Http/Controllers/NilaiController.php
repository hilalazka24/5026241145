<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilaikuliah')->orderBy('id')->get();
        return view('nilaikuliah.index', compact('nilai'));
    }

    public function create()
    {
        return view('nilaikuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NRP' => 'required|string|max:6',
            'NilaiAngka' => 'required|integer',
            'SKS' => 'required|integer',
        ]);

        DB::table('nilaikuliah')->insert([
            'nrp' => $request->NRP,
            'nilaiangka' => $request->NilaiAngka,
            'sks' => $request->SKS,
        ]);

        return redirect()->route('nilaikuliah.index')->with('success', 'Data nilai berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        DB::table('nilaikuliah')->where('id', $id)->delete();

        return redirect()->route('nilaikuliah.index')->with('success', 'Data nilai berhasil dihapus.');
    }
}
