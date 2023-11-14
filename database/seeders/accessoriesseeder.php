<?php

namespace Database\Seeders;

use App\Models\accessories;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class accessoriesseeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $accessoriesitem = [
            'Keyboard',
            'HDMI Cable',
            'Stand laptop',
            'Speaker',
            'Converter',
            'VGA Cable',
            'Power Cable',
            'SSD',
            'RAM',
            'Hardisk',
        ];

        for ($i = 0; $i < 15; $i++) {
            accessories::create([
                'nama_barang' => $faker-> randomElement($accessoriesitem),
                'harga_barang' => rand(19999,199999 ),
                'nomor_seri_barang' => $faker-> numberBetween(1000, 9999),
                'jumlah_barang' => rand(0,20)
            ]);
        }
    }
}
