<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categories;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categories>
 */
class categoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->sentence(2),
            'created_at'=> now(),
            'updated_at'=> now(),
        ];
    }
}
