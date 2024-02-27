<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title'=>'My First Book',
            'description'=>'My First Book Description',
            'status'=> true,
            'published_date'=>date('Y-m-d'),
            'user_id'=>501,
        ]);
    }
}
