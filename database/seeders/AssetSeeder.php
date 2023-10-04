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
                'nama_barang' => $faker->randomElement($assetitem),
                'harga_barang' => rand(10000, 100000),
                'nomor_seri_barang' => $faker->numberBetween(1000, 9999),
                'jumlah_barang' => rand(0, 100),
            ]);
        }
    }
}
