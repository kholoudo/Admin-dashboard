<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'home maintenance',

            ],
            [
                'category_name' => 'home cleaning',

            ],

            [
                'category_name' => 'car wash',


            ],
            [
                'category_name' => 'private lessons',


            ],
            [
                'category_name' => 'baby sitting',

            ]

        ]);
    }
}
