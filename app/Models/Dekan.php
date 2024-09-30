<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dekan extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'dekan';
    protected $primaryKey = 'nidn_dekan';
    public $incrementing = false;
    protected $keyType = 'string';
=======
    protected $table = 'dekan'; // Nama tabel
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7

    protected $fillable = [
        'nidn_dekan',
        'nama_dekan',
<<<<<<< HEAD
        'email',
        'id_fakultas',
    ];
    /*
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
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
