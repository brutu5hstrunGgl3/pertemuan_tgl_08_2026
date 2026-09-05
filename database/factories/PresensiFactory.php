<?php

namespace Database\Factories;

use App\Models\Presensi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Presensi>
 */
class PresensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        // factory presensi 10 user 

        return [
           
            'user_id' => 2,
            'tanggal_masuk' => $this->faker->date(),
            'jam_masuk' => $this->faker->time(),
            'jam_pulang' => $this->faker->time(),
            'tanggal_pulang' => $this->faker->date(),
            'shift' => $this->faker->randomElement(['pagi', 'siang']),
            'keterlambatan' => 0,
           


        ];
    }
}
