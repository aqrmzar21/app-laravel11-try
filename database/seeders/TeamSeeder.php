<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat database default yang di tanam di HardCode
        Team::create([
            'nama' => 'Marten Paes',
            'nopung' => 1,
            'klub' => 'FC Dallas',
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);

        Team::create([
            'nama' => 'Mees Hilgers',
            'nopung' => 2,
            'klub' => 'FC Twentee',
        ]);
        Team::create([
            'nama' => 'Jay Idzes',
            'nopung' => 3,
            'klub' => 'Venezia FC',
        ]);
        Team::create([
            'nama' => 'Jordi Amat',
            'nopung' => 4,
            'klub' => "Johor Darul Ta'zim",
        ]);
        Team::create([
            'nama' => 'Rizky Ridho',
            'nopung' => 5,
            'klub' => 'Persija Jakarta',
        ]);

        Team::create([
            'nama' => 'Sandy Walsh',
            'nopung' => 6,
            'klub' => 'Yokohama F. Marinos',
        ]);

        Team::create([
            'nama' => 'Marselino Ferdinan',
            'nopung' => 7,
            'klub' => 'Oxford United',
        ]);

        Team::create([
            'nama' => 'Kevin Diks',
            'nopung' => 8,
            'klub' => 'Copenhagen',
        ]);
        
        Team::create([
            'nama' => 'Rafael Struick',
            'nopung' => 9,
            'klub' => 'Brisbane Roar',
        ]);
        Team::create([
            'nama' => 'Ole Romeny',
            'nopung' => 10,
            'klub' => 'Oxford United',
        ]);

        Team::create([
            'nama' => 'Ragnar Oratmangoen',
            'nopung' => 11,
            'klub' => 'FCV Dender',
        ]);


        Team::create([
            'nama' => 'Pratama Arhan',
            'nopung' => 12,
            'klub' => 'Bangkok United',
        ]);

        Team::create([
            'nama' => 'Muhammad Ferarri',
            'nopung' => 13,
            'klub' => 'Persija Jakarta',
        ]);
        
        Team::create([
            'nama' => 'Joey Pelupessy',
            'nopung' => 14,
            'klub' => 'Lommel SK',
        ]);

        Team::create([
            'nama' => 'Ricky Kambuaya',
            'nopung' => 15,
            'klub' => 'Dewa United',
        ]);


        Team::create([
            'nama' => 'Nadeo Argawinata',
            'nopung' => 16,
            'klub' => 'Borneo FC',
        ]);

        Team::create([
            'nama' => 'Calvin Verdonk',
            'nopung' => 17,
            'klub' => 'NEC Nijmegen',
        ]);

        Team::create([
            'nama' => 'Ivar Jenner',
            'nopung' => 18,
            'klub' => 'FC Utrecht',
        ]);

        Team::create([
            'nama' => 'Thom Haye',
            'nopung' => 19,
            'klub' => 'Almere City',
        ]);

        Team::create([
            'nama' => 'Shayne Pattynama',
            'nopung' => 20,
            'klub' => 'KAS Eupen',
        ]);

        Team::create([
            'nama' => 'Ernando Ari',
            'nopung' => 21,
            'klub' => 'Persebaya',
        ]);

        Team::create([
            'nama' => 'Nathan Tjoe-A-On',
            'nopung' => 22,
            'klub' => 'Swansea City',
        ]);

        Team::create([
            'nama' => 'Justin Hubner',
            'nopung' => 23,
            'klub' => 'Wolves U-21',
        ]);

        Team::create([
            'nama' => 'Dean James',
            'nopung' => 24,
            'klub' => 'Go Ahead Eagles',
        ]);
        Team::create([
            'nama' => 'Septian Bagaskara',
            'nopung' => 25,
            'klub' => 'Dewa United',
        ]);

        Team::create([
            'nama' => 'Eliano Reijnders',
            'nopung' => 26,
            'klub' => 'PEC Zwolle',
        ]);

        Team::create([
            'nama' => 'Hokky Caraka',
            'nopung' => 27,
            'klub' => 'PSS Sleman',
        ]);

        Team::create([
            'nama' => 'Ramadhan Sananta',
            'nopung' => 28,
            'klub' => 'Persis Solo',
        ]);

        Team::create([
            'nama' => 'Egy Maulana Vikri',
            'nopung' => 29,
            'klub' => 'Dewa United',
        ]);

        Team::create([
            'nama' => 'Emil Audero',
            'nopung' => 30,
            'klub' => 'Palermo',
        ]);
    }
}
