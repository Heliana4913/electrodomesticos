<?php

namespace Database\Seeders;

use App\Models\Image;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i += 1) {
            Image::factory()->create([
                'path' => $faker->filePath(),
                'description' => $faker->text(),
                'product_id' => $i + 1,
            ]);
        }
    }
}
