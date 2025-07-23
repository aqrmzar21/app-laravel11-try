<?php

namespace Database\Seeders;

use App\Models\Kategori;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Kategori::create([
            'list' => 'Teknologi',
            'warna' => 'blue',
        ]);

        Kategori::create([
            'list' => 'Olahraga',
            'warna' => 'red',
        ]);

        Kategori::create([
            'list' => 'Pendidikan',
            'warna' => 'yellow',
        ]);

        Kategori::create([
            'list' => 'Kesehatan',
            'warna' => 'green',
        ]);

        Kategori::create([
            'list' => 'Hiburan',
            'warna' => 'purple',
        ]);

        Kategori::create([
            'list' => 'Travel',
            'warna' => 'orange',
        ]);
    }
}
