<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    // Menampilkan daftar data
    public function index()
    {
        // Mengambil semua data Prodi
    $prodis = Prodi::all();
    
    // Mengirim data Prodi ke tampilan
    return view('pageadmin.dataprodi.index', compact('prodis'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('pageadmin.dataprodi.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
    // Validasi input sebagai array
    $validatedData = $request->validate([
        'nama_prodi' => 'required|string|max:20', // Pastikan 'nama_prodi' adalah array
        // 'nama_prodi.*' => 'required|string|max:255', // Validasi setiap elemen dalam array
    ]);

    // Simpan setiap nama prodi ke database
    foreach ($validatedData['nama_prodi'] as $namaProdi) {
        \App\Models\Prodi::create([
            'nama_prodi' => $namaProdi,
        ]);
    }

    // Redirect ke halaman tertentu dengan pesan sukses
    return redirect()->route('dataprodi.index')->with('success', 'Data berhasil disimpan!');
    }

    // Menampilkan detail data
    public function show($id)
    {
        return view('pageadmin.dataprodi.show', compact('id'));
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        return view('pageadmin.dataprodi.edit', compact('id'));
    }

    // Memperbarui data
    public function update(Request $request, $id)
    {
        // Validasi dan update data
        return redirect()->route('pageadmin.dataprodi.index');
    }

    // Menghapus data
    public function destroy($id)
    {
        // Hapus data
        return redirect()->route('pageadmin.dataprodi.index');
    }
}
