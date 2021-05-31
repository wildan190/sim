<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'kd_mkul', 'nama_mkul', 'kd_dosen', 'jam', 'ruang_kelas', 'jumlah_mhs', 'tanggal_mulai'
    ];
}
