<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => '1st Post',
            'description' => 'This is inside First Post',
            'status' => TRUE,
            'published_date' => date('Y-m-d'),
            'user_id' => 2063,
            'category_id' => 2,
        ]);

        DB::table('posts')->insert([
            'title' => '2nd Post',
            'description' => 'This is inside Second Post',
            'status' => TRUE,
            'published_date' => date('Y-m-d'),
            'user_id' => 1040,
            'category_id' => 1,
        ]);

        DB::table('posts')->insert([
            'title' => '3rd Post',
            'description' => 'This is inside Third Post',
            'status' => TRUE,
            'published_date' => date('Y-m-d'),
            'user_id' => 2450,
            'category_id' => 3,
        ]);

        DB::table('posts')->insert([
            'title' => '4th Post',
            'description' => 'This is inside Fourth Post',
            'status' => TRUE,
            'published_date' => date('Y-m-d'),
            'user_id' => 6410,
            'category_id' => 2,
        ]);

        DB::table('posts')->insert([
            'title' => '5th Post',
            'description' => 'This is inside Fifth Post',
            'status' => TRUE,
            'published_date' => date('Y-m-d'),
            'user_id' => 8070,
            'category_id' => 1,
        ]);

        DB::table('posts')->insert([
            'title' => '6th Post',
            'description' => 'This is inside Sixth Post',
            'status' => TRUE,
            'published_date' => date('Y-m-d'),
            'user_id' => 7650,
            'category_id' => 3,
        ]);
        

        DB::table('categories')->insert([
            'name' => 'News',
        ]);

        DB::table('categories')->insert([
            'name' => 'Tech',
        ]);

        DB::table('categories')->insert([
            'name' => 'Education',
        ]);


    }
}
