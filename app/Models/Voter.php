<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_peserta',
        'nama_voter',
        'nama_penyanyi',
        'kategori',
        'nilai',
    ];
}
