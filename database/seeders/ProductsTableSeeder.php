<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Products');

        for($i = 1; $i<=2; $i ++){
        \DB::table('products')->insert([
            'name' => $faker->word(),
            'sku' => $faker->numerify('UM-##'),
            'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 100),
            'weather_forecast' => 'clear',
        ]);
        }
    }
}
