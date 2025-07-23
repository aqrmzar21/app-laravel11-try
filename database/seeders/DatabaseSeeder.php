<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Cara 1:
        // $this->call([TeamSeeder::class,]);
        // $this->call([KategoriSeeder::class,]);
        // Cara 2:
        $this->call([
            TeamSeeder::class,
            KategoriSeeder::class,
        ]);

        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com',
        //     'password' => bcrypt('password'),

        // ]);
        // Kategori::create([
        //     'list' => 'Web Desain',

        // ]);
        // Post::create([
        //     'uuid' => 1,
        //     'topik' => 'Judul Post',
        //     'penulis_id' => 1,
        //     'kategori_id' => 1,
        //     'isi' => 'Isi Post',
        // ]);

        // Cara Factory I
        // Post::factory(10)->recycle([
        //     Kategori::factory(5)->create(),
        //     User::factory(3)->create(),
        // ])->create();
        // Cara Factory II
        // Post::factory(20)->recycle([
        //     Kategori::all(), // ini dipakai ketika pemanggilan call kategori di atas sudah ditulis
        // ])->create();

        Post::factory(20)->recycle([
            Kategori::all(), // ini dipakai ketika pemanggilan call kategori di atas sudah ditulis
            User::factory(3)->create(),
        ])->create();


        // Jalankan KategoriSeeder terlebih dahulu
        // $this->call([KategoriSeeder::class,]);
        // Buat data pengguna menggunakan factory
        // User::factory(5)->recycle([
        //     Kategori::all(), 
        //     Post::all(),
        // ])->create();
        // Jalankan PostSeeder, pastikan relasi benar
        $this->call([PostSeeder::class,]);
    }
}
