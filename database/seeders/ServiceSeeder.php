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
                'service_description' => 'lorem ipsum dolor',
                'service_price'=>'from 5 to 10 JOD', 
            'category_id'=>'1',

            ],
            [
                'service_name' => 'Car Wash',
                
                'service_description' => 'lorem ipsum dolor',
                'service_price'=>'from 3 to 5 JOD',
                'category_id'=>'3',

            ],
            [ 
                'service_name' => 'Baby Sitting',
               
                'service_description' => 'lorem ipsum dolor',
                'service_price'=>'5 JOD per hour'
                ,'category_id'=>'5',

            ],
            [ 
                'service_name' => 'Home Cleaning',
               
                'service_description' => 'lorem ipsum dolor',
                'service_price'=>'5 JOD per hour',
                'category_id'=>'2',

            ],
            [   
                'service_name' => 'Private lessons',
                
                'service_description' => 'lorem ipsum dolor',
                'service_price'=>'5 JOD per hour',
                 'category_id'=>'3',

            ]



        ]);

    }
}
