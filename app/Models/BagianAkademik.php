<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BagianAkademik extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'bagianakademik';

    protected $primaryKey = 'nidn_bagianakademik'; // Primary key adalah NIDN Bagian Akademik

    public $incrementing = false;

    protected $keyType = 'string'; // Tipe primary key adalah string

    protected $fillable = [
        'nidn_bagianakademik', 
        'nama_bagianakademik', 
        'email', 
        'id_fakultas'
    ];

    /**
     * Relasi belongs-to dengan User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }

    /**
     * Relasi belongs-to dengan Fakultas.
     */
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id_fakultas');
    }
}
=======
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bagianakademik';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'nidn_bagianakademik';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false; // Karena nidn bukan integer

    /**
     * The data type of the primary key.
     *
     * @var string
     */
    protected $keyType = 'string'; // Tipe primary key adalah string

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nidn_bagianakademik',
        'nama_bagianakademik',
        'email',
        'id_fakultas',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true; // Menyimpan waktu pembuatan dan pembaruan

    // Define relationships if needed
}
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
