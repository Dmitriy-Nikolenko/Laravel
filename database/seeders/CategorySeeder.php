<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');

        for ($i=0; $i<5; $i++)
        {
            DB::table('category')->insert([
                'name' => $faker->realText(50),
                'description' => $faker->realText(100),
                'photo' => $faker->imageUrl(),
                 ]);
        }

    }
}
