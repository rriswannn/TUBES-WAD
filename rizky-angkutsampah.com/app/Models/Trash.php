<?php

// File: app/Models/Trash.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trash extends Model
{
    protected $fillable = [
        'nama', 'alamat', 'jam_pengangkutan', 'tanggal', 'jenis_sampah_lainnya', 'telepon',
    ];

    public $timestamps = false; // Tambahkan baris ini
}



