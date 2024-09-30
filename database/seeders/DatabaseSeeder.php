<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD

use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\ProgramStudi;
=======
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
<<<<<<< HEAD
        // $this->call(UserSeeder::class);
        // $this->call(MahasiswaSeeder::class);
        // $this->call(KaprodiSeeder::class);

        $this->call([
            UserSeeder::class,
            FakultasSeeder::class,
            ProgramStudiSeeder::class,
            PembimbingAkademikSeeder::class,
            BagianAkademikSeeder::class,
            MahasiswaSeeder::class,
            DekanSeeder::class,
            KetuaProgramStudiSeeder::class,
        ]);
=======
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
    }
}
