<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function show() {
        $mahasiswa = Mahasiswa::all();
        return view('welcome', compact('mahasiswa'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        Mahasiswa::create([
            "nama" => $request->nama,
            "nim" => $request->nim,
            "semester" => $request->semester,
            "tgl_lahir" => $request->tgl_lahir,
            "alamat" => $request->alamat
        ]);

        return redirect(route('show'));
    }
}
