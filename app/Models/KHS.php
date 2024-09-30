<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KHS extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'khs';

    
    public $incrementing = false;

    protected $keyType = 'string'; // Tipe primary key adalah string

    protected $fillable = ['nim' , 'nilai', 'kode_mk'];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class, 'kode_mk', 'kode_mk');
    }
=======
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'khs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nim',
        'nilai',
        'kode_mk',
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
