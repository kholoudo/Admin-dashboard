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

                'service_name' => 'Home Maintenance',
                'service_description' => 'We provide  a comprehensive preventive maintenance program to preserve and enhance the value, life, and beauty of your home.',
                'service_price'=>'from 5 to 10 JOD',
            'category_id'=>'1',

            ],
            [
                'service_name' => 'Car Wash',

                'service_description' => 'High-quality hand wash, affordable prices. Get washed right where you parked at your office, apartment, or home.',
                'service_price'=>'from 3 to 5 JOD',
                'category_id'=>'3',

            ],
            [
                'service_name' => 'Baby Sitting',
                'service_description' => 'Whether you’re a busy family that needs a sitter periodically on a regular basis, or need reliable child care at the drop of a dime, Service Way can help',
                'service_price'=>'5 JOD per hour'
                ,'category_id'=>'5',

            ],
            [
                'service_name' => 'Home Cleaning',

                'service_description' => 'Life is too short to clean your own home! Our team at The Service way is here for you.',
                'service_price'=>'5 JOD per hour',
                'category_id'=>'2',

            ],
            [
                'service_name' => 'Private lessons',

                'service_description' => 'Whether you are taking exam classes or general language, adding private lessons to your schedule is a great way to improve your skills and understanding quickly',
                'service_price'=>'5 JOD per hour',
                 'category_id'=>'3',

            ]



        ]);

    }
}
