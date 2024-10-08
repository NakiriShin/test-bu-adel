<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    // Menampilkan daftar rumah sakit
    public function index()
    {
        $rumah_sakits = RumahSakit::all();
        return view('rumah_sakits.index', compact('rumah_sakits'));
    }

    // Menampilkan form tambah rumah sakit
    public function create()
    {
        return view('rumah_sakits.create');
    }

    // Menyimpan data rumah sakit ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
        ]);

        RumahSakit::create($request->all());

        return redirect()->route('rumah_sakits.index')->with('success', 'Pasien berhasil ditambahkan.');
    }

    // Menampilkan form edit rumah sakit
    public function edit(RumahSakit $rumah_sakit)
    {
        return view('rumah_sakits.edit', compact('rumah_sakit'));
    }

    // Memperbarui data rumah sakit
    public function update(Request $request, RumahSakit $rumah_sakit)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
        ]);

        $rumah_sakit->update($request->all());

        return redirect()->route('rumah_sakits.index')->with('success', 'Pasien berhasil diperbarui.');
    }

    // Menghapus rumah sakit
    public function destroy(RumahSakit $rumah_sakit)
    {
        $rumah_sakit->delete();

        return redirect()->route('rumah_sakits.index')->with('success', 'Pasien berhasil dihapus.');
    }
}
