<?php

namespace App\Http\Controllers;

use App\Models\Pengawas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilPengawasController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        $pengawas = Pengawas::with('jabatan')->get();
        return view('pagepengawas.profilpengawas', compact('user', 'pengawas')); // Mengirim data ke view
    }
}