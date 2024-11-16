<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilAnggota;
use Illuminate\Support\Facades\Auth;
use Session;

class HasilAnggotaController extends Controller
{
    public function vote(Request $request)
    {
        // Validasi apakah user sudah login dan ada session id_murid
        $id_murid = Session::get('id_murid');
        if (!$id_murid) {
            return redirect()->back()->with('error', 'Anda belum login!');
        }

        // Validasi input
        $request->validate([
            'id_anggota' => 'required|exists:anggotas,id',
        ]);

        // Cek apakah murid sudah melakukan voting sebelumnya
        $existingVote = HasilAnggota::where('user_id', $id_murid)->first();
        if ($existingVote) {
            return redirect()->back()->with('error', 'Anda sudah melakukan voting!');
        }

        // Simpan hasil voting
        HasilAnggota::create([
            'user_id' => $id_murid,
            'anggota_id' => $request->input('id_anggota'),
        ]);

        Session::forget('id_murid');
        // Arahkan ke halaman pemilihan-anggota setelah voting berhasil
        return redirect('/login')->with('success', 'Terima kasih telah melakukan voting!');
    }
}
