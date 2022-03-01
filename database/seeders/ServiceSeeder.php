<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([

            [
                'service_name' => 'home_maintenance',
                'service_description' => 'lorem ipsum dolor',

            ],
            [
                'service_name' => 'car_service',
                'service_description' => 'lorem ipsum dolor',

            ],
            [
                'service_name' => 'baby_sitter',
                'service_description' => 'lorem ipsum dolor',

            ]


            ]);

    }
}
