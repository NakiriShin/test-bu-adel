<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $dokters = Doctor::all();
        return view('dokters.index', compact('dokters'));
    }

    public function create()
    {
        return view('dokters.create');
    }

    // Menyimpan dokter baru ke database
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        // Membuat dokter baru dengan data yang sudah divalidasi
        $dokter->update($validatedData);
        return redirect()->route('dokters.index')->with('success', 'Data dokter berhasil diperbarui.');
    }

    // Menghapus dokter dari database
    public function destroy(Doctor $dokter)
    {
        $dokter->delete();
        return redirect()->route('dokters.index')->with('success', 'Dokter berhasil dihapus.');
    }
}