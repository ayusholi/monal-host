<?php

namespace Database\Seeders;

use App\Models\EmailService;
use App\Models\Service;
use App\Models\VpsService;
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
                'data' => [
                    'name' => 'Personal Plan',
                    'slug' => 'personal-plan',
                    'interval' => '6',
                    'interval_type' => 'Month',
                    'base_price' => 15,
                    'service_type' => 'vps',
                ],
                'details' => [
                    'ram' => 2,
                    'ram_unit' => "GB",
                    'storage' => 50,
                    'storage_unit' => 'GB',
                    'storage_type' => 'SSD',
                    'cpu_cores' => 2,
                ]
            ],
            [
                'data' => [
                    'name' => 'Startup Plan',
                    'slug' => 'startup-plan',
                    'interval' => '12',
                    'interval_type' => 'Month',
                    'base_price' => 6000,
                    'service_type' => 'vps',
                ],
                'details' => [
                    'ram' => 4,
                    'ram_unit' => "GB",
                    'storage' => 100,
                    'storage_unit' => 'GB',
                    'storage_type' => 'SSD',
                    'cpu_cores' => 4,
                ]
            ],
            [
                'data' => [
                    'name' => 'Business Plan',
                    'slug' => 'business-plan',
                    'interval' => '6',
                    'interval_type' => 'Month',
                    'base_price' => 2000,
                    'service_type' => 'vps',
                ],
                'details' => [
                    'ram' => 8,
                    'ram_unit' => "GB",
                    'storage' => 200,
                    'storage_unit' => 'GB',
                    'storage_type' => 'SSD',
                    'cpu_cores' => 2,
                ]
            ],
            [
                'data' => [
                    'name' => 'Self Hosted Email',
                    'slug' => 'self-hosted-email',
                    'interval' => '6',
                    'interval_type' => 'Month',
                    'base_price' => 2000,
                    'service_type' => 'email',
                ],
                'details' => [
                    'storage' => 50,
                    'storage_unit' => 'GB',
                    'anti_spam' => 0,
                    'rate_limit' => 0,
                    'blacklist_email' => 0,
                    'feature' => "5 Users",
                ]
            ],
        ];

        foreach($services as $service) {
            $new_service = Service::create($service["data"]);
            $service['details']['service_id'] = $new_service->id;
            if($service['data']['service_type'] == "email") EmailService::create($service['details']);
            else VpsService::create($service['details']);
        }
    }
}
