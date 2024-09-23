<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    use HasFactory;

    protected $table = 'jadwalkuliah'; // Nama tabel

    protected $fillable = [
        'nama_kelas',
        'kode_mk',
        'kode_ruang',
        'hari',
        'jam',
    ];

    // Relasi ke tabel kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'nama_kelas');
    }

    // Relasi ke tabel matakuliah
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'kode_mk');
    }

    // Relasi ke tabel ruang
    public function ruang()
    {
        return $this->belongsTo(Ruang::class, 'kode_ruang');
    }
}
