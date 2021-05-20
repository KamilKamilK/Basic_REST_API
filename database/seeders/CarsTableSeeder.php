<?php

namespace Database\Seeders;

use App\Models\Car;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::truncate();

        $faker= Factory::create();

        for ($i = 0; $i <50; $i++){
            Car::create([
                'typ' => $faker->name(),
                'marka' => $faker->company,
                'model' => $faker->lastName,
            ]);
        }


    }
}
