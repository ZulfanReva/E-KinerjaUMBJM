<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    /**
     * Tampilkan halaman login.
     */
    public function index()
    {
        // Jika user sudah login, arahkan sesuai role-nya
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('pageadmin.berandaadmin');
            } elseif ($user->role == 'pengawas') {
                return redirect()->route('pagepengawas.berandapengawas');
            }
        }

        return view('masuk');
    }

    /**
     * Proses login pengguna.
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], [
            'username.required' => 'Nama Pengguna wajib diisi!',
            'password.required' => 'Kata Sandi wajib diisi!',
        ]);

        // Menyiapkan data login dengan username dan password
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        // Proses autentikasi
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Arahkan berdasarkan role user
            if ($user->role == 'admin') {
                return redirect()->route('pageadmin.berandaadmin');
            } elseif ($user->role == 'pengawas') {
                return redirect()->route('pagepengawas.berandapengawas');
            } else {
                return redirect()->route('index'); // Halaman default jika role tidak sesuai
            }
        } else {
            // Jika login gagal, kirimkan pesan kesalahan
            return back()->with('error', 'Username atau Kata Sandi yang Anda masukkan salah.<br>Silakan coba lagi.');

        }
    }

    /**
     * Proses logout pengguna.
     */
    public function logout(Request $request)
    {
        // Logout pengguna
        Auth::logout();

        // Hapus session dan kembalikan ke halaman login
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login setelah logout
        return redirect()->route('index');
    }
}