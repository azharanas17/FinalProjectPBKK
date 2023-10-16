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
                                                        'The Catcher in the Rye',
                                                        'Pride and Prejudice',
                                                        'The Hobbit',
                                                        'Brave New World',
                                                        'The Lord of the Rings',
                                                        'The Chronicles of Narnia',
                                                        'Moby-Dick',
                                                        'The Odysses',
                                                        'Jane Eyre',
                                                        'The Count of Monte Cristo',
                                                        'War and Peace',
                                                        'The Achemist',
                                                        'The Shining',
                                                        'The Da Vinci Code',
                                                        'A Tale of Two Cities',
                                                        'The Road',
                                                        'The Hunger Game',
                                                        'The Girl with the Dragon Tattoo',
                                                        'Lord of the Flies',    
                                                        'The Giver',
                                                        'Gone with the Wind']),
            'penulis' => $this->faker->randomElement(['J.K Rowling',
                                                        'Harper Lee',
                                                        'F. Scott Fitzgerald',
                                                        'William Faulkner',
                                                        'J.D. Salinger',
                                                        'Jane Austen',
                                                        'J.R.R Tolkien',
                                                        'J.R.R Tolkien',
                                                        'C.S. Lewis',
                                                        'Herman Melville',
                                                        'Homer',
                                                        'Charlotte Bronte',
                                                        'Alexander Dumas',
                                                        'Leo Tolstoy',
                                                        'Paulo Coelho',
                                                        'Stephen King',
                                                        'Dan Brown',
                                                        'Charles Dickens',
                                                        'Cormac McCarthy',
                                                        'Suzanne Collins',
                                                        'Stieg Larsson',
                                                        'William Golding',
                                                        'Lois Lowry',
                                                        'Margaret Mitchell',
                                                        'Frances Hodgson Burnett']),
            'tahun_terbit' => $this->faker->randomElement([1997, 1960, 1925, 1967, 1951, 1813, 1937, 1932, 1954, 1950, 1851, 1800, 1847, 1844, 1869, 1988, 1977, 2003, 1859, 2006, 2008, 2005, 1954, 1993, 1936]),
            'jumlah_buku' => $this->faker->randomElement([122, 77, 99, 323, 65, 34, 87, 12, 30, 45, 82, 132, 94, 56, 29, 78, 203, 69, 97, 176, 281, 60, 38, 80, 56]),
        ];
    }
}
