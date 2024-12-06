<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenilaianPM; // Asumsikan model PenilaianPM sudah ada

class PenilaianPMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan semua data penilaian PM
        $penilaians = PenilaianPM::all();
        return view('pageadmin.penilaianpm.index', compact('penilaians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk menambah penilaian baru
        return view('pageadmin.penilaianpm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kriteria' => 'required|string|max:255',
            'bobot' => 'required|numeric',
        ]);

        // Simpan data ke database
        PenilaianPM::create($request->all());

        return redirect()->route('penilaianpm.index')
                         ->with('success', 'Penilaian berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Menampilkan detail data penilaian berdasarkan ID
        $penilaian = PenilaianPM::findOrFail($id);
        return view('pageadmin.penilaianpm.show', compact('penilaian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Menampilkan form edit untuk data penilaian
        $penilaian = PenilaianPM::findOrFail($id);
        return view('pageadmin.penilaianpm.edit', compact('penilaian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'nama_kriteria' => 'required|string|max:255',
            'bobot' => 'required|numeric',
        ]);

        // Update data di database
        $penilaian = PenilaianPM::findOrFail($id);
        $penilaian->update($request->all());

        return redirect()->route('pageadmin.penilaianpm.index')
                         ->with('success', 'Penilaian berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hapus data penilaian dari database
        $penilaian = PenilaianPM::findOrFail($id);
        $penilaian->delete();

        return redirect()->route('pageadmin.penilaianpm.index')
                         ->with('success', 'Penilaian berhasil dihapus.');
    }
}