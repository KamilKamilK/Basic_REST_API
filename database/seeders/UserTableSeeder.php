<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = Factory::create();

        $password = Hash::make('testowe');

        User::create([

            'name' => 'Kamil',
            'email' => 'kamil@kamil.com',
            'password' => $password,

        ]);

        for ($i = 0; $i <10; $i++) {

            User::create([

                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,

            ]);
        }
    }
}
