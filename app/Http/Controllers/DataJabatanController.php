<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class DataJabatanController extends Controller
{
    // Menampilkan daftar data
    public function index()
    {
    // Mengambil semua data Jabatan
    $jabatans = Jabatan::all();

    // Mengirim data Jabatan ke tampilan
    return view('pageadmin.datajabatan.index', compact('jabatans'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('pageadmin.datajabatan.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
    // Validasi input
    $request->validate([
        'nama_jabatan' => 'required|array',
        'nama_jabatan.*' => 'required|string|max:255',
    ]);

    // Simpan data prodi
    foreach ($request->nama_jabatan as $namaJabatan) {
        Jabatan::create(['nama_jabatan' => $namaJabatan]);
    }

    // Setelah berhasil, redirect ke halaman daftar prodi
    return redirect()->route('admin.datajabatan.index')->with('success', 'Data Prodi berhasil disimpan!');
    }

    // Menampilkan detail data
    public function show($id)
    {
        return view('pageadmin.datajabatan.show', compact('id'));
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        return view('pageadmin.datajabatan.edit', compact('id'));
    }

    // Memperbarui data
    public function update(Request $request, $id)
    {
        // Validasi dan update data
        return redirect()->route('pageadmin.datajabatan.index');
    }

    // Menghapus data
    public function destroy($id)
    {
        // Mencari data berdasarkan ID
        $prodi = Jabatan::find($id);

        // Cek apakah data ditemukan
        if (!$prodi) {
            return response()->json([
                'success' => false,
                'message' => 'Data Jabatan tidak ditemukan.'
            ], 404);  // Mengembalikan error 404 jika data tidak ditemukan
        }

        // Menghapus data
        $prodi->delete();

        // Mengirimkan pesan sukses dalam format JSON
        return response()->json([
            'success' => true,
            'message' => 'Data Jabatan berhasil dihapus!'
        ]);
    }

}