<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'nrp' => $this->faker->numerify('##########'),
            'kelas' => $this->faker->randomElement(['Sains', 
                                                    'Sosial',
                                                    'Bahasa',
                                                    'Agama',
                                                    'Kesenian',
                                                    'Olahraga',
                                                    'Teknologi',
                                                    'Kesehatan',
                                                    'Ekonomi']),
            'hp' => $this->faker->numerify('08##########'),
        ];
    }
}