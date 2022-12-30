<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Peserta;
use App\Models\Voter;

class UserVote extends Component
{
    public $nilai = 10;
    public $nama_voter = '';
    public $peserta = '';

    public function updateNilai($value)
    {
        $peserta          = Peserta::where('status', 1)->first();
        $this->peserta    = Peserta::where('status', 1)->first();
        $this->nama_voter = cookie('nama');
        $this->nilai      = $value;

        Voter::create([
            "id_peserta" => $peserta->id,
            "nama_voter" => $this->nama_voter,
            "nama_penyanyi" => $peserta->nama,
            "kategori" => $peserta->kategori,
            "nilai" => $this->nilai,
        ]);
    }

    public function render()
    {
        return view('livewire.user-vote');
    }
}
