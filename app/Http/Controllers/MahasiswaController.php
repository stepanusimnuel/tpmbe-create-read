<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Fakultas;

class MahasiswaController extends Controller
{
    public function show() {
        $mahasiswa = Mahasiswa::all();
        return view('welcome', compact('mahasiswa'));
    }

    public function create() {
        $data = Fakultas::all();
        return view('create', compact('data'));
    }

    public function store(Request $request) {
        $fileName = $request->nama . '-' .$request->nim . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image/', $fileName);
        Mahasiswa::create([
            "nama" => $request->nama,
            "nim" => $request->nim,
            "semester" => $request->semester,
            "tgl_lahir" => $request->tgl_lahir,
            "alamat" => $request->alamat,
            "image" => $fileName,
            "id_fakultas" => $request->fakultas
        ]);

        return redirect(route('show'));
    }

    public function update($id) {
        $data = Mahasiswa::findOrFail($id);
        $fakultas = Fakultas::all();

        return view('update', compact('data', 'fakultas'));
    }

    public function edit(Request $request, $id) {
        $data = Mahasiswa::findOrFail($id);

        $fileName = $request->nama . '-' .$request->nim . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image/', $fileName);

        $data->update([
            "nama" => $request->nama,
            "nim" => $request->nim,
            "semester" => $request->semester,
            "tgl_lahir" => $request->tgl_lahir,
            "alamat" => $request->alamat,
            "image" => $fileName,
            "id_fakultas" => $request->fakultas
        ]);

        return redirect(route('show'));
    }

    public function delete($id) {
        Mahasiswa::destroy($id);
        return redirect(route('show'));
    }
}
