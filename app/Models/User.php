<?php

namespace App\Models;

<<<<<<< HEAD
// use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'tb_user';
<<<<<<< HEAD
    protected $primaryKey = 'email';
    // // Non-incrementing karena email adalah string
    public $incrementing = false;

    // // Tipe primary key adalah string
    protected $keyType = 'string';
=======
    protected $primaryKey = 'email'; 
    public $incrementing = false; // Non-incrementing karena bukan integer
    protected $keyType = 'string'; 
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
<<<<<<< HEAD
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];
=======
    protected $hidden = [
        'password',
        'remember_token',
    ];
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
<<<<<<< HEAD
        // 'password' => 'hashed',
    ];

 /**
     * Relasi dengan mahasiswa.
     * Satu user bisa menjadi satu mahasiswa.
     */
    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'email', 'email');
    }

    /**
     * Relasi dengan dekan.
     * Satu user bisa menjadi satu dekan.
     */
    public function dekan()
    {
        return $this->hasOne(Dekan::class, 'email', 'email');
    }

    /**
     * Relasi dengan ketua program studi.
     * Satu user bisa menjadi satu ketua program studi.
     */
    public function ketuaProgramStudi()
    {
        return $this->hasOne(KetuaProgramStudi::class, 'email', 'email');
    }

    /**
     * Relasi dengan pembimbing akademik.
     * Satu user bisa menjadi satu pembimbing akademik.
     */
    public function pembimbingAkademik()
    {
        return $this->hasOne(PembimbingAkademik::class, 'email', 'email');
    }

    /**
     * Relasi dengan bagian akademik.
     * Satu user bisa menjadi satu bagian akademik.
     */
    public function bagianAkademik()
    {
        return $this->hasOne(BagianAkademik::class, 'email', 'email');
    }

=======
        'password' => 'hashed',
    ];
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
}
