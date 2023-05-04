<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Produce;
use Faker\Factory as FakerFactory;

class FruitsAndVegetablesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = FakerFactory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

        $vegetables = [];
        $fruits = [];

        foreach (range(1, 50) as $index) {

            $vegetableName = $faker->unique()->vegetableName();
            
            // Check if the vegetable name already exists in the array
           // while (in_array($vegetableName, $vegetables)) {
                //$vegetableName = $faker->unique()->vegetableName();
            //}

            if(!in_array($vegetableName, $vegetables)){

                $vegetables[] = $vegetableName;

                Produce::create([
                    'name' => $vegetableName,
                    'category' => 'vegetable',
                    'popularity' => $faker->numberBetween(1, 100),
                ]);
            }
            
            
            $fruitName = $faker->unique()->fruitName();
            
            // Check if the vegetable name already exists in the array
            if(!in_array($fruitName, $fruits)){

                $fruits[] = $fruitName;

                Produce::create([
                    'name' => $fruitName,
                    'category' => 'fruit',
                    'popularity' => $faker->numberBetween(1, 100),
                ]);
            }
            
           
            
        }
       
    }
}

