<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dekan extends Model
{
    use HasFactory;

    protected $table = 'dekan'; // Nama tabel

    protected $fillable = [
        'nidn_dekan',
        'nama_dekan',
        'id_programstudi',
        'email',
        'id_fakultas',
    ];

    // Relasi ke tabel program studi
    // Relasi ke tabel dosen
    public function user()
    {
        return $this->belongsTo(user::class, 'email');
    }

    // Relasi ke tabel fakultas
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas');
    }
}
