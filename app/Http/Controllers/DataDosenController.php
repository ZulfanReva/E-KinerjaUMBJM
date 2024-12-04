<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DataDosenController extends Controller
{
    // Menampilkan daftar data dosen
    public function index()
    {
        $dosens = Dosen::with('prodi')->get(); // Memuat relasi Prodi
        return view('pageadmin.datadosen.index', compact('dosen'));
    }

    // Menampilkan form tambah data dosen
    public function create()
    {
        // Mengambil semua data prodi
        $prodis = Prodi::all();
        
        // Mengirim data ke view
        return view('pageadmin.datadosen.create', compact('prodis'));
    }

    // Menyimpan data dosen baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_dosen' => 'required|array',
            'nama_dosen.*' => 'required|string|max:255',
            'nidn' => 'required|array',
            'nidn.*' => 'required|string|max:20',
            'prodi' => 'required|array',
            'prodi.*' => 'required|exists:prodis,id', // Pastikan ID Prodi valid
            'status' => 'required|array',
            'status.*' => 'required|in:aktif,nonaktif',
        ]);

        // Simpan data dosen
        foreach ($request->nama_dosen as $key => $namaDosen) {
            Dosen::create([
                'nama_dosen' => $namaDosen,
                'nidn' => $request->nidn[$key],
                'prodi_id' => $request->prodi[$key],
                'status' => $request->status[$key],
            ]);
        }

        // Setelah berhasil, redirect ke halaman daftar dosen
        return redirect()->route('admin.datadosen.index')->with('success', 'Data Dosen berhasil disimpan!');
    }


   // Menampilkan detail data dosen
    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('pageadmin.datadosen.show', compact('dosen'));
    }

    // Menampilkan form edit data dosen
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        $prodis = Prodi::all(); // Mengambil semua data prodi
        return view('pageadmin.datadosen.edit', compact('dosen', 'prodis'));
    }

    // Memperbarui data dosen
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_dosen' => 'required|string|max:255', // Ganti nama menjadi nama_dosen
            'nidn' => 'required|numeric|unique:dosen,nidn,' . $id,
            'prodi' => 'required|exists:prodi,id',
            'status' => 'required|string|in:aktif,nonaktif',
        ]);

        // Update data dosen
        $dosen = Dosen::findOrFail($id);
        $dosen->update([
            'nama_dosen' => $request->nama_dosen, // Ganti nama menjadi nama_dosen
            'nidn' => $request->nidn,
            'prodi_id' => $request->prodi,
            'status' => $request->status,
        ]);

        // Setelah berhasil, redirect ke halaman daftar dosen
        return redirect()->route('admin.datadosen.index')->with('success', 'Data dosen berhasil diperbarui!');
    }

    // Menghapus data dosen
    public function destroy($id)
    {
        $dosen = Dosen::find($id);

        if (!$dosen) {
            return response()->json([
                'success' => false,
                'message' => 'Data dosen tidak ditemukan.'
            ], 404);
        }

        $dosen->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data dosen berhasil dihapus!'
        ]);
    }
}
