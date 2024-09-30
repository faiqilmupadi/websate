<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRS extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'irs';
    
    public $incrementing = false;

    protected $fillable = ['nim','kode_ruang', 'kode_mk', 'nama_kelas'];

      // Relasi dengan Mahasiswa
      public function mahasiswa()
      {
          return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
      }
  
      // Relasi dengan Ruang Perkuliahan
      public function ruangPerkuliahan()
      {
          return $this->belongsTo(RuangPerkuliahan::class, 'kode_ruang', 'kode_ruang');
      }
  
      // Relasi dengan Mata Kuliah
      public function mataKuliah()
      {
          return $this->belongsTo(MataKuliah::class, 'kode_mk', 'kode_mk');
      }
  
      // Relasi dengan Kelas
      public function kelas()
      {
          return $this->belongsTo(Kelas::class, 'nama_kelas', 'nama_kelas');
      }
=======
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'irs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nim',
        'kode_ruang',
        'kode_mk',
        'nama_kelas',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true; // Menyimpan waktu pembuatan dan pembaruan

    // Define relationships if needed
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
}
