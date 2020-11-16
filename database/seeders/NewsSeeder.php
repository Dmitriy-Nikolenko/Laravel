<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');
        $category = DB::select('SELECT id FROM category');
        $source = DB::select('SELECT id FROM source');
        for ($i=0; $i<50; $i++)
        {
            DB::table('news')->insert([
                'title' => $faker->realText('30'),
                'preview' => $faker->realText('100'),
                'text' => $faker->realText('500'),
                'photo' => $faker->imageUrl(),
                'category_id' => $category[array_rand($category)]->id,
                'source_id' => $source[array_rand($source)]->id,
            ]);
        }


    }
}
