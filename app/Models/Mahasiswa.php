<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

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
}
