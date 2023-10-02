<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul_buku' => $this->faker->randomElement(['Harry Potter and the Sorcerer\'s Stone', 
                                                        'To Kill a Mockingbird',
                                                        'The Great Gatsby',
                                                        'One Hundred Years of Solitude',
                                                        'The Catcher in the Rye']),
            'penulis' => $this->faker->randomElement(['J.K Rowling',
                                                        'Harper Lee',
                                                        'F. Scott Fitzgerald',
                                                        'Gabriel Garcia Marquez',
                                                        'J.D. Salinger']),
            'tahun_terbit' => $this->faker->randomElement([1881, 1960, 1925, 1967, 1951]),
            'jumlah_buku' => $this->faker->randomElement([122, 77, 99, 323, 65]),
        ];
    }
}
