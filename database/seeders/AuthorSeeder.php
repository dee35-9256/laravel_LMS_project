<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        

        DB::table('authors')->insert([
            'author_name'=> 'chetan bhagat'
        ]);
        DB::table('authors')->insert([
            'author_name'=>'Amrita Pritam'
        ]);
        DB::table('authors')->insert([
            'author_name'=> 'Rabindranath Tagore'
        ]);
        DB::table('authors')->insert([
            'author_name'=> 'Ruskin Bond'
        ]);
        DB::table('authors')->insert([
            'author_name'=> 'Vikram Seth'
        ]);
    }
}
