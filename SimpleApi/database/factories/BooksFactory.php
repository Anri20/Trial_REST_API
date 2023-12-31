<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    protected $model = Books::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->sentence,
            'author' =>$this->faker->name,
            'publish_date' =>$this->faker->date,
        ];
    }
}
