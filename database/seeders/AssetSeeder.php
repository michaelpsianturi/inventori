<?php

namespace Database\Seeders;

use App\Models\asset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    public function run()
    {
        $data =  [
            ['nama' => 'Laptop', 'harga' => 10000, 'Qty' =>'10'],
            ['nama' => 'Handphone', 'harga' => 20000, 'Qty' =>'2'],
            ['nama' => 'Monitor', 'harga' => 140423, 'Qty' =>'30'],
        ];
        asset::insert($data);
    }

}
