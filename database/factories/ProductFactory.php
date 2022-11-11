<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'slug' => $this->faker->firstName(),
            'description' => $this->faker->sentence(5),
            'price' => $this->faker->randomDigit()
        ];
    }
}
