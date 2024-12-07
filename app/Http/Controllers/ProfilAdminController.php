<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilAdminController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        return view('pageadmin.profiladmin', compact('user')); // Mengirim data ke view
    }
}