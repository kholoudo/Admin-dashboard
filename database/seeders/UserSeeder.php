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
            // 'name',
            // 'email',
            // 'email_verified_at',
            // 'password',
            // 'role',
            // 'mobile_number',
            DB::table('users')->insert([
            
            
        
                [
                   
                    'name' => 'admin',
                    'email' => 'admin@admin.com',
                    'password'=>'admin12345', 
                    'mobile_number'=>'0777777777',
                'role'=>'admin',
    
                ],
               
              
            
    
    
            ]);








     }
    }
