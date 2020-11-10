<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Faker;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');
    for ($i=0; $i<10; $i++)
    {
        DB::table('source')->insert([
            'name'=> $faker->realText(50),
        ]);
    }

    }
}
