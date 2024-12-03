<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen; // Pastikan model Dosen sudah dibuat

class DataDosenController extends Controller
{
    // Menampilkan daftar dosen
    public function index()
    {
        $dosen = Dosen::all(); // Mengambil semua data dosen
        return view('pageadmin.datadosen', compact('dosen'));
    }

    // Menampilkan form tambah dosen
    public function create()
    {
        return view('pageadmin.datadosen-tambah');
    }

    // Menyimpan data dosen baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nidn' => 'required|numeric|unique:dosen',
            'prodi' => 'required|string|max:255',
            'status' => 'required|string|in:aktif,nonaktif',
        ]);

        Dosen::create([
            'nama' => $request->nama,
            'nidn' => $request->nidn,
            'prodi' => $request->prodi,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.datadosen')->with('success', 'Data dosen berhasil ditambahkan.');
    }

    // Menampilkan form edit dosen
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('pageadmin.datadosen-edit', compact('dosen'));
    }

    // Memperbarui data dosen
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nidn' => 'required|numeric|unique:dosen,nidn,' . $id,
            'prodi' => 'required|string|max:255',
            'status' => 'required|string|in:aktif,nonaktif',
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->update([
            'nama' => $request->nama,
            'nidn' => $request->nidn,
            'prodi' => $request->prodi,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.datadosen')->with('success', 'Data dosen berhasil diperbarui.');
    }
}
