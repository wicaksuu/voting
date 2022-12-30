<?php

namespace App\Http\Livewire;

use App\Models\Peserta;
use Livewire\Component;

class Admin extends Component
{
    public $nama = '';
    public $kategori = '';
    public function render()
    {
        return view('livewire.admin');
    }

    public function addSinger()
    {
        $save['nama'] = $this->nama;
        $save['kategori'] = $this->kategori;
        Peserta::create($save);
        $this->nama = '';
        $this->kategori = '';
    }
}
