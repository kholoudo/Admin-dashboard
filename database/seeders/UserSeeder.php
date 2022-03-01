<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder

    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
             //
             DB::table('categories')->insert([
                [
                    'category_name' => 'home_maintenance',

                ],
                [
                    'category_name' => 'car_services',


                ],
                [
                    'category_name' => 'educational',


                ]]);

     }
    }
