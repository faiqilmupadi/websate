<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

<<<<<<< HEAD
    // Mengatur nama tabel secara eksplisit (jika nama tabel tidak sesuai konvensi plural Laravel)
    protected $table = 'fakultas';

    // Tentukan primary key (default Laravel adalah 'id', jadi kita ubah sesuai dengan 'id_fakultas')
    protected $primaryKey = 'id_fakultas';

    // Tentukan tipe dari primary key (karena id_fakultas adalah bigInteger, secara default sudah integer)
    public $incrementing = true; // Menggunakan auto-increment (default adalah true, jadi bisa diabaikan)

    protected $keyType = 'int'; // Primary key adalah tipe integer

    // Kolom yang bisa diisi secara massal
=======
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fakultas';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_fakultas';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
    protected $fillable = [
        'nama_fakultas',
    ];

<<<<<<< HEAD
    // Relasi dengan Ketuaprogramstudi (jika ada)
    public function ketuaProgramStudi()
    {
        return $this->hasMany(Ketuaprogramstudi::class, 'id_fakultas', 'id_fakultas');
    }

    // Relasi dengan ProgramStudi (jika ada)
    public function programStudi()
    {
        return $this->hasMany(ProgramStudi::class, 'id_fakultas', 'id_fakultas');
    }

    public function dekan()
    {
        return $this->hasOne(Dekan::class, 'id_fakultas', 'id_fakultas');
    }

    public function bagianAkademik()
    {
        return $this->hasOne(BagianAkademik::class, 'id_fakultas', 'id_fakultas');
    }

    public function pembimbingAkademik()
    {
        return $this->hasMany(PembimbingAkademik::class, 'id_fakultas', 'id_fakultas');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_fakultas', 'id_fakultas');
    }
}

=======
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
