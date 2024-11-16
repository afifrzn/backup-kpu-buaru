<?php

// app/Http/Controllers/LoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'kode' => 'required',
        ]);

        // Cek apakah nama dan kode sesuai dengan yang ada di database
        $murid = Murid::where('nama', strtolower(str_replace(' ', '', $request->input('nama'))))
                      ->where('kode', $request->input('kode'))
                      ->first();

        if ($murid) {
            // Login berhasil, simpan id_murid di session dan redirect ke halaman pemilihan ketos
            Session::put('id_murid', $murid->id);
            return redirect('/pemilihan-ketos');
        } else {
            // Login gagal, kembalikan ke halaman login dengan error
            return back()->with('error', 'Nama atau kode salah!');
        }
    }

    // Tampilkan halaman pemilihan ketos (pastikan ada middleware auth)
    public function pemilihanKetos()
    {
        // Kamu bisa menggunakan session di halaman ini
        $id_murid = Session::get('id_murid');
        return view('pemilihan-ketos', compact('id_murid'));
    }
}


