<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemainMU extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang sesuai dengan skema
    protected $table = 'pemain_m_u_s';

    // Menentukan kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama_pemain',        // Kolom judul
        'no_punggung',      // Kolom penulis
        'posisi',        // Kolom harga
    ];

}
