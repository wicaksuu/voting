<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class VoteController extends Controller
{
    //
    public function tambah_peserta(Request $request)
    {
    }
    public function masuk_user(Request $request)
    {
        if ($request->nama) {
            cache(['nama' => $request->nama], 1140);

            return redirect('vote-user');
        } else {
            cache(['nama_juri' => $request->nama_juri], 1140);
            return redirect('vote-juri');
        }
    }

    public function vote_juri()
    {
        // if (cache('nama_juri') == '') {
        //     return redirect('juri');
        // }
        $peserta =  Peserta::where('status', 1)->first();
        return view('vote-juri', ['peserta' => $peserta]);
    }

    public function vote_user()
    {
        // if (cache('nama') == '') {
        //     return redirect('');
        // }
        $peserta =  Peserta::where('status', 1)->first();
        return view('vote', ['peserta' => $peserta]);
    }


    public function updateRange(Request $request)
    {
        $nilai = $request->input('nilai');

        // Simpan nilai minimum dan maksimum ke database
    }
}
