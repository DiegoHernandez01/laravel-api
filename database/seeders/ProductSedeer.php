<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=50; $i++) {
            Products::create([
                'name' => $faker->word,
                'price' => $faker->randomFloat(2, 10, 100), // Números decimales aleatorios entre 10 y 100
                'category' => $faker->word,
            ]);
        }
    }
}
