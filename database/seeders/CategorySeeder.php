<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('es_ES'); // create a Spanish faker
        
        
        for ($i = 0; $i < 5; $i++) {
            Category::create([
                'title' => $faker->word,
            ]);
        }
    }
}
