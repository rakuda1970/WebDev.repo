<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as FakerFactory;
use DB;

class HexColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a new instance of the Faker library
        $faker = FakerFactory::create();

        // Generate 100 unique HTML hex colors and insert them into the database
        $hexColors = collect();
        for ($i = 0; $i < 100; $i++) {
            $hexColor = $faker->unique()->hexColor;
            $hexColors->push([
                'hexcode' => $hexColor,
            ]);
        }
        DB::table('hexcolors')->insert($hexColors->toArray());
    }
}
