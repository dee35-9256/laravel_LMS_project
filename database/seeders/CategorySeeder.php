<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
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
            'category'=> 'Philosophy',
        ]);

        DB::table('categories')->insert([
            'category'=> 'Horror',
        ]);
        DB::table('categories')->insert([
            'category'=> 'Thriller',
        ]);
    }
}
