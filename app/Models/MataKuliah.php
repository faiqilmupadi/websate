<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class MataKuliah extends Model
{
    use HasFactory;

    // Tabel yang digunakan oleh model ini
    protected $table = 'matakuliah';

    // Primary key untuk tabel matakuliah
    protected $primaryKey = 'kode_mk';

    public $incrementing = false;

    protected $keyType = 'string';
    // Atribut yang bisa diisi (fillable)
=======
class Matakuliah extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'matakuliah';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'kode_mk';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false; // Karena kode_mk bukan integer

    /**
     * The data type of the primary key.
     *
     * @var string
     */
    protected $keyType = 'string'; // Tipe primary key adalah string

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
<<<<<<< HEAD
        'nidn_dosenpengampu',
    ];

    // Relasi dengan model KHS
    public function khs()
    {
        return $this->hasMany(KHS::class, 'kode_mk', 'kode_mk');
    }

    public function irs()
    {
        return $this->hasMany(IRS::class, 'kode_mk', 'kode_mk');
    }

    // Relasi dengan model Dosen Pengampu
    public function dosenPengampu()
    {
        return $this->belongsTo(DosenPengampu::class, 'nidn_dosenpengampu', 'nidn_dosenpengampu');
    }

    // Relasi dengan Jadwal Kuliah
    public function jadwalKuliah()
    {
        return $this->hasMany(JadwalKuliah::class, 'kode_mk', 'kode_mk');
    }
    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'kode_mk', 'kode_mk');
    }
}
=======
        'nidn_dosen',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true; // Menyimpan waktu pembuatan dan pembaruan

    /**
     * Relationship with Dosen.
     */
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn_dosen', 'nidn'); // Relasi many-to-one dengan Dosen
    }
}
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
