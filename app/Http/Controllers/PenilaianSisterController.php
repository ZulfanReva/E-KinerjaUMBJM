<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Periode;
use App\Models\PenilaianPerilakuKerja;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\PendingHasThroughRelationship;

class PenilaianSisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // Ambil semua data dosen dengan relasi 'prodi', 'jabatan', 'user'
        $dosens = Dosen::with('prodi', 'jabatan')->get();

        // Ambil dosen dengan jabatan 'DOSEN PENGAJAR'
        $dosenPengajar = Dosen::with('prodi', 'jabatan')
            ->whereHas('jabatan', function ($query) {
                $query->where('nama_jabatan', 'DOSEN PENGAJAR');
            })
            ->paginate(10, ['*'], 'dosenPengajar_page'); // Pagination untuk Dosen Pengajar

        return view('pageadmin.penilaiansister.index', compact('dosenPengajar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $dosen = Dosen::findOrFail($request->dosen_id);

        // Ambil daftar periode dari tabel `periode` dalam bentuk koleksi
        $periodeList = Periode::all();

        return view('pageadmin.penilaiansister.create', compact('dosen', 'periodeList'));
    }


    public function store(Request $request)
    {

        return redirect()->route('pageadmin.penilaiansister.index')->with('success', 'Penilaian berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Menampilkan detail data penilaian berdasarkan ID
        $penilaian = PenilaianPerilakuKerja::findOrFail($id);

        // Fetching the list of periods (Periode)
        $periodeList = Periode::all();  // Assuming 'Periode' is your model

        // Passing both penilaian and periodeList to the view
        return view('pageadmin.penilaiansister.show', compact('penilaian', 'periodeList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Menampilkan form edit untuk data penilaian
        $penilaian = PenilaianPerilakuKerja::findOrFail($id);
        return view('pageadmin.penilaiansister.edit', compact('penilaian'));
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
        $penilaian = PenilaianPerilakuKerja::findOrFail($id);
        $penilaian->update($request->all());

        return redirect()->route('pageadmin.penilaiansister.index')
            ->with('success', 'Penilaian berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Mencari data dosen berdasarkan ID
        $dosen = Dosen::findOrFail($id);

        // Menghapus data penilaianBKD dan penilaianPerilakuKerja terkait dosen
        $dosen->penilaianBKD()->delete();
        $dosen->penilaianPerilakuKerja()->delete();

        // Menghapus data dosen itu sendiri
        $dosen->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.penilaiansister.index')->with('success', 'Data berhasil dihapus');
    }
}
