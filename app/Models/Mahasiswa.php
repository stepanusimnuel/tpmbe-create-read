<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nim', 'semester', 'tgl_lahir', 'alamat', 'image', 'id_fakultas'
    ];

    public function fakultas() {
        return $this->belongsTo(Fakultas::class, 'id_fakultas');
    }
}
