<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categories::truncate();
        $faker = \Faker\Factory::create();

        Categories::create([
            'name' => 'iphone',
,
        ]);

        for ($i = 0; $i < 10; $i++) {
            Categories::create([
                'name' => $faker->name,
            ]);
        }
    }
}
