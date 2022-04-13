<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [
                'name' => 'Asia',
                'latitude' => '25.2323232323232323',
                'longitude' => '25.2323232323232323',
                'price' => 0.00,
            ],
            [
                'name' => 'Europe',
                'latitude' => '25.2323232323232323',
                'longitude' => '25.2323232323232323',
                'price' => 5.00,
            ],
        ];

        foreach($regions as $region) {
            Region::create($region);
        }
    }
}
