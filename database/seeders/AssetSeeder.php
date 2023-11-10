<?php

namespace Database\Seeders;

use App\Models\Asset;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $assetitem = [
            'laptop',
            'handphone',
            'Monitor',
            'Pc',
        ];

        for ($i = 0; $i < 10; $i++) {
            Asset::create([
                'product_name' => $faker->randomElement($assetitem),
                'product_price' => rand(10000, 100000),
                'product_serial_number' => $faker->numberBetween(1000, 9999),
                'product_stock' => rand(0, 100),
                'description' => $faker->text(100)
            ]);
        }
    }
}
