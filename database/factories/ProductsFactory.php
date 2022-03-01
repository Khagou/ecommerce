<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use use App\Models\Products;


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
            'nom' => $this->faker->sentence,
            'description' => $this->faker->text,
            'prix' => $this->faker->numberBetween(50, 150),
            'coup de coeur' => (bool) rand(0, 1),
            'couleur' => rand('bleu', 'rouge', 'vert'),
            'image' => rand('https://dummyimage.com/600x400/55595c/fff', 'https://dummyimage.com/855x365/a30ca3/fff', 'https://dummyimage.com/855x365/1443ff/fff'),
            'promotion' => rand (0, 20),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
