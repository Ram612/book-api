<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_title'=>$this->faker->randomElement(['Power platform', 'Cyber Security', 'Kubernetes', 'AWS certified', 'Administering windows', 'Configuring windows', 'Web developers', 'Logic Pro', 'Mastering', 'Oddo Technical', 'Laravel', 'React Pro']),
            'price'=>$this->faker->randomFloat(2,1500,2500)
        ];
    }
}
