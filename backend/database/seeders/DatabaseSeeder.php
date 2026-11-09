<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    use \Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
>>>>>>> a8f618b60c4e0af3f4ac198cd2f408b3cc755786
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
<<<<<<< HEAD
            KategoriSeeder::class,
=======
            KategoriSeeder::clc  vass,
>>>>>>> a8f618b60c4e0af3f4ac198cd2f408b3cc755786
            AlatSeeder::class,
            PeminjamanSeeder::class,
            DetailPinjamSeeder::class,
            PengembalianSeeder::class,
            LogAktivitasSeeder::class,
        ]);
    }
}