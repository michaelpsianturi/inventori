<?php

namespace Database\Seeders;

use App\Models\Asset;
use Carbon\FactoryImmutable;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Asset::create([
                'nama_barang' => $faker->name(),
                'harga_barang' => rand(10000, 100000),
                'nomor_seri_barang' => $faker->numberBetween(1000, 9999),
                'jumlah_barang' => rand(0, 100),
            ]);
        }
    }
}
