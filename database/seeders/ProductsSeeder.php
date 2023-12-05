<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i += 1) {
            Product::factory()->create([
                'name' => $faker->words(2, true),
                'description' => $faker->text(),
                'price' => $faker->randomFloat(2, 0, 99999),
            ]);
        }
    }
}
