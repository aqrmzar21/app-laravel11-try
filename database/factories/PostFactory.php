<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'uuid' => fake()->unique()->uuid(),
            'topik' => fake()->sentence(),
            // 'penulis' => fake()->name(),
            'penulis_id' => User::factory(), // generate id sambilbuat factory name
            'kategori_id' => Kategori::factory(), // generate id sambilbuat factory name
            'isi' => fake()->text(),
        ];
    }
}
