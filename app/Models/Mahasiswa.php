<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'mahasiswa';

    protected $primaryKey = 'nim'; // Primary key adalah NIM

    public $incrementing = false; // Primary key bukan auto-increment

    protected $keyType = 'string'; // Tipe primary key adalah string

    protected $fillable = [
        'nim', 
        'nama_mahasiswa', 
        'semester', 
        'email',
        'nidn_pembimbingakademik', 
        'id_programstudi', 
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
     * Relasi belongs-to dengan ProgramStudi.
     */
    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'id_programstudi', 'id_programstudi');
    }

    /**
     * Relasi belongs-to dengan Fakultas.
     */
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id_fakultas');
    }

    public function pembimgbingakademik()
    {
        return $this->belongsTo(PembimbingAkademik::class, 'nidn_pembimbingakademik', 'nidn_pembimbingakademik');
    }

    public function khs(){
        return $this->hasOne(KHS::class, 'nim', 'nim');
    } 

    public function irs(){
        return $this->hasOne(IRS::class, 'nim', 'nim');
    } 
=======
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mahasiswa';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'nim';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false; // Karena NIM bukan integer

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
        'nim',
        'nama_mahasiswa',
        'semester',
        'email',
        'id_programstudi',
        'id_fakultas',
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
