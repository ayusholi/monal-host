<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name' => 'Personal Plan',
                'slug' => 'personal-plan',
                'ram' => 2,
                'ram_unit' => "GB",
                'storage' => 50,
                'storage_unit' => 'GB',
                'storage_type' => 'SSD',
                'cpu_cores' => 2,
                'interval' => '6',
                'interval_type' => 'Month',
                'base_price' => 2000
            ],
            [
                'name' => 'Startup Plan',
                'slug' => 'startup-plan',
                'ram' => 4,
                'ram_unit' => "GB",
                'storage' => 100,
                'storage_unit' => 'GB',
                'storage_type' => 'SSD',
                'cpu_cores' => 4,
                'interval' => '12',
                'interval_type' => 'Month',
                'base_price' => 6000
            ],
            [
                'name' => 'Business Plan',
                'slug' => 'business-plan',
                'ram' => 8,
                'ram_unit' => "GB",
                'storage' => 200,
                'storage_unit' => 'GB',
                'storage_type' => 'SSD',
                'cpu_cores' => 2,
                'interval' => '6',
                'interval_type' => 'Month',
                'base_price' => 2000
            ],
        ];

        foreach($services as $service) {
            Service::create($service);
        }
    }
}
