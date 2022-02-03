<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            'book_title' => 'one indian girl',
            'author_id' => 1,
            'category_id' => 1,
            'status'=>'published',
        ]);

        DB::table('books')->insert([
            'book_title'=> 'india positive',
            'author_id'=> 1,
            'category_id'=> 1,
            'status'=>'published',
        ]);
        DB::table('books')->insert([
            'book_title'=> 'Revolution',
            'author_id'=> 2,
            'category_id'=> 1,
            'status'=>'published',
        ]);
        DB::table('books')->insert([
            'book_title'=> 'Making india Asesome',
            'author_id'=> 2,
            'category_id'=> 1,
            'status'=>'published',
        ]);
        DB::table('books')->insert([
            'book_title'=> 'Half Girfriend',
            'author_id'=> 3,
            'category_id'=> 1,
            'status'=>'published',
        ]);
        DB::table('books')->insert([
            'book_title'=> 'What young india wants',
            'author_id'=> 3,
            'category_id'=> 1,
            'status'=>'published',
        ]);
        
    }
}
