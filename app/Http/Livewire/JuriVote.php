<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Peserta;
use App\Models\Voter;

class JuriVote extends Component
{

    public $nilai = 10;
    public $nama_voter = '';
    public $peserta = '';

    public function updateNilai($value)
    {
        $this->peserta    = Peserta::where('status', true)->first();
        $this->nama_voter = cookie('nama');
        $this->nilai      = $value;

        Voter::create([
            "id_peserta" => $this->peserta->id,
            "nama_voter" => $this->nama_voter,
            "nama_penyanyi" => $this->peserta->nama,
            "kategori" => $this->peserta->kategori,
            "nilai" => $this->nilai,
        ]);
    }


    public function render()
    {
        return view('livewire.juri-vote');
    }
}
