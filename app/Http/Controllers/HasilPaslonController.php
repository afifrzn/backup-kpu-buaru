<?php

// app/Http/Controllers/HasilPaslonController.php

namespace App\Http\Controllers;

use App\Models\HasilPaslon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HasilPaslonController extends Controller
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
            'id_paslon' => 'required|exists:paslons,id',
        ]);

        // Cek apakah murid sudah melakukan voting sebelumnya
        $existingVote = HasilPaslon::where('user_id', $id_murid)->first();
        if ($existingVote) {
            return redirect()->back()->with('error', 'Anda sudah melakukan voting!');
        }

        // Simpan hasil voting
        HasilPaslon::create([
            'user_id' => $id_murid,
            'paslon_id' => $request->input('id_paslon'),
        ]);

        // Arahkan ke halaman pemilihan-anggota setelah voting berhasil
        return redirect('/pemilihan-anggota')->with('success', 'Terima kasih telah melakukan voting!');
    }
}
