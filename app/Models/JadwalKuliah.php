<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'jadwalkuliah';

    
    public $incrementing = false;

    protected $fillable = [
=======
    protected $table = 'jadwalkuliah'; // Nama tabel

    protected $fillable = [
        'nama_kelas',
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
        'kode_mk',
        'kode_ruang',
        'hari',
        'jam',
<<<<<<< HEAD
        'nama_kelas',
    ];

    // Relasi dengan Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'nama_kelas', 'nama_kelas');
    }

    // Relasi dengan Mata Kuliah
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'kode_mk', 'kode_mk');
    }

    // Relasi dengan Ruang Perkuliahan
    public function ruangPerkuliahan()
    {
        return $this->belongsTo(RuangPerkuliahan::class, 'kode_ruang', 'kode_ruang');
=======
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
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
    }
}
