<?php


namespace App\Http\Controllers;

use Closure;
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
        'username' => 'required',
        'password' => 'required',
    ]);

    // Cek kredensial
    if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        // Login berhasil
        return redirect()->route('admin.beranda');
    }

    // Jika login gagal
    return redirect()->route('masuk')->with('error', 'Username atau kata sandi salah');
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

    public function handle(Request $request, Closure $next, ...$roles)
    {
    // Cek apakah user sudah login
    if (Auth::check()) {
        // Redirect ke halaman admin.beranda jika sudah login
        return redirect()->route('admin.beranda');
    }

    // Jika belum login, arahkan ke halaman login
    return redirect()->route('masuk');
}
}