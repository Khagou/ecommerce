<?php

namespace Database\Seeders;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $products = products::factory()->create();
        products::factory(15)->create();
        $categories = categories::factory()->create();
        categories::factory(5)->create();
    }
}
