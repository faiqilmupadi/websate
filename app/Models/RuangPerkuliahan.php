<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangPerkuliahan extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'ruangperkuliahan';

    protected $primaryKey = 'kode_ruang';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'kode_ruang',
        'gedung',
        'kapasitas',
    ];

    // Relasi dengan IRS
    public function irs()
    {
        return $this->hasMany(IRS::class, 'kode_ruang', 'kode_ruang');
    }

    // Relasi dengan Jadwal Kuliah
    public function jadwalKuliah()
    {
        return $this->hasMany(JadwalKuliah::class, 'kode_ruang', 'kode_ruang');
    }
=======
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ruangperkuliahan';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'kode_ruang';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false; // Karena `kode_ruang` bukan integer

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
    protected $fillable = [
        'kode_ruang',
        'gedung',
    ];
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
}
