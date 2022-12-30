<?php

namespace App\Http\Livewire;

use App\Models\Peserta;
use Livewire\Component;

class TabelPeserta extends Component
{
    public function render()
    {
        $peserta = Peserta::all();
        return view('livewire.tabel-peserta', ['peserta' => $peserta]);
    }
}
