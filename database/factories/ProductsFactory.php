<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Products;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->sentence(1),
            'description' => $this->faker->text(25),
            'prix' => $this->faker->numberBetween(50, 150),
            'slug' => $this->faker->slug(),
            'favoris' => (bool) rand(0, 1),
            'couleurs' => $this->faker->randomElement(['rouge', 'bleu', 'vert']),
            'image' => $this->faker->randomElement(['https://dummyimage.com/600x400/55595c/fff', 'https://dummyimage.com/855x365/a30ca3/fff', 'https://dummyimage.com/855x365/1443ff/fff']),
            'promotion' => rand (0, 20),
            'categories_id' => rand (1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
