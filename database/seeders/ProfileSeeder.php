<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('datauser')->insert([
                'profile_name' => $faker->name,
                'profile_email' => $faker->unique()->safeEmail,
                'profile_phone_number' => $faker->phoneNumber,
                'profile_address' => $faker->address,
            ]);
        }
    }
}
