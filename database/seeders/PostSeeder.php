<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create(
            [
                'uuid' => '87a6a641-44ee-4579-9fc4-ecc0deeda9e8',
                'topik' => 'Partrick Out',
                'penulis_id' => 1, // Pastikan user dengan id 1 sudah ada
                'kategori_id' => 2,
                'isi' => '"Patrick Out" menjadi sorotan di media sosial, memicu perdebatan hangat di kalangan penggemar. Isu ini berkaitan dengan spekulasi tentang masa depan Patrick di timnya. Banyak yang menyuarakan kekecewaan, sementara sebagian lainnya masih berharap adanya klarifikasi resmi. Performa Patrick belakangan ini memang menuai kritik, namun kontribusinya selama ini tak bisa diabaikan. Apakah "Patrick Out" hanya rumor belaka, ataukah ini sinyal perubahan besar? Kita tunggu saja perkembangan selanjutnya.',
            ]
        );
        Post::create(
            [
                'uuid' => '62966d02-a5d7-4281-9b1e-9af801f0c04d',
                'topik' => 'STY Back',
                'penulis_id' => 1, // Pastikan user dengan id 1 sudah ada
                'kategori_id' => 2,
                'isi' => 'Kembalinya Shin Tae-yong (STY) ke kursi kepelatihan tim nasional Indonesia disambut dengan antusiasme tinggi oleh para penggemar sepak bola tanah air. Sosok pelatih asal Korea Selatan ini memang memiliki tempat tersendiri di hati masyarakat Indonesia, berkat dedikasi dan perubahan positif yang dibawanya. STY dikenal dengan gaya melatih yang disiplin dan taktis, serta kemampuannya dalam mengembangkan potensi pemain muda.
                    Kehadirannya kembali diharapkan dapat membawa angin segar bagi timnas, yang tengah berjuang untuk meraih prestasi di kancah internasional. Para penggemar pun menaruh harapan besar agar STY mampu membawa timnas Indonesia meraih impian, dan mengharumkan nama bangsa di kancah sepak bola dunia.',
            ]
        );
        Post::create(
            [
                'uuid' => '87a6a641-44ee-4579-9fc4-ecc0deeda900',
                'topik' => 'AFCMafia',
                'penulis_id' => 1, // Pastikan user dengan id 1 sudah ada
                'kategori_id' => 2,
                'isi' => 'Istilah "AFC Mafia" muncul di media sosial, khususnya di kalangan penggemar sepak bola Indonesia, dan terkait dengan kekecewaan atas hasil pertandingan tim nasional Indonesia melawan Bahrain dalam kualifikasi Piala Dunia 2026 zona Asia.
                    Kekecewaan ini memuncak, yang menyebabkan banyak warganet Indonesia mengungkapkan ketidakpuasan mereka terhadap Konfederasi Sepak Bola Asia (AFC).
                    Bentuk dari kekecewaan ini salah satunya dengan merubah lokasi di google maps di daerah bahrain dengan nama "AFC Mafia".
                    Ungkapan "AFC Mafia" mencerminkan persepsi adanya ketidakadilan atau praktik tidak sehat dalam penyelenggaraan pertandingan.
                    Hal ini juga berimbas pada penyerangan akun media sosial AFC oleh warganet indonesia',
            ]
        );

        // Contoh penggunaan factory untuk data acak
        // Post::factory(10)->create();
        // Post::factory(20)->recycle([])->create();
    }
}
