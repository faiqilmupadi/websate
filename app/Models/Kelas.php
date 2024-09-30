<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'kelas';
    
    protected $primaryKey = 'nama_kelas';

    public $incrementing = false;

    protected $keyType = 'string'; // Tipe primary key adalah string

=======
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kelas';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'nama_kelas';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false; // Karena nama_kelas bukan integer

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
        'nama_kelas',
        'kode_mk',
    ];

<<<<<<< HEAD
    // Relasi dengan IRS
    public function irs()
    {
        return $this->hasMany(IRS::class, 'nama_kelas', 'nama_kelas');
    }
    // Relasi dengan Jadwal Kuliah
    public function jadwalKuliah()
    {
        return $this->hasMany(JadwalKuliah::class, 'nama_kelas', 'nama_kelas');
    }
}
=======
    /**
     * The relationships that belong to the class.
     */
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'kode_mk', 'kode_mk');
    }
}
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
