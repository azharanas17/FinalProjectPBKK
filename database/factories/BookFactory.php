<?php

namespace Database\Factories;

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
            'kode' => $this->faker->randomElement(['Biography', 
                                                    'Fantasy',
                                                    'Fiction',
                                                    'History',
                                                    'Horror',
                                                    'Mystery',
                                                    'Poetry',
                                                    'Romance',
                                                    'Science Fiction',
                                                    'Thriller']),
            'judul' => $this->faker->randomElement(['Harry Potter and the Sorcerer\'s Stone', 
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
            'pengarang' => $this->faker->randomElement(['J.K. Rowling',
                                                        'Harper Lee',
                                                        'F. Scott Fitzgerald',
                                                        'Gabriel Garcia Marquez',
                                                        'J.D. Salinger',
                                                        'Jane Austen',
                                                        'J.R.R. Tolkien',
                                                        'Margaret Mitchell']),
            'penerbit' => $this->faker->randomElement(['Bloomsbury Publishing',
                                                        'HarperCollins',
                                                        'Charles Scribner\'s Sons',
                                                        'Harper & Brothers',
                                                        'Jonathan Cape',
                                                        'Random House',
                                                        'Penguin Books',
                                                        'Houghton Mifflin',
                                                        'Macmillan Publishers']),
            
        ];
    }
}
