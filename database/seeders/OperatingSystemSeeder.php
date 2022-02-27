<?php

namespace Database\Seeders;

use App\Models\OperatingSystem;
use Illuminate\Database\Seeder;

class OperatingSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operating_systems = [
            [
                'name' => 'Ubuntu',
                'version' => '20.0',
                'remarks' => "Ubuntu Operating System",
            ],
            [
                'name' => 'CentOs',
                'version' => '7.6',
                'remarks' => "Centos Operating System",
            ],
            [
                'name' => 'Windows',
                'version' => '20H2',
                'remarks' => "Windows Server, Version 20H2",
            ],
        ];

        foreach($operating_systems as $os) {
            OperatingSystem::create($os);
        }
    }
}
