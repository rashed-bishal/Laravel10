<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\User;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory(5)->create();
        Post::factory(20)->create();
<<<<<<< HEAD
        User::factory(5)->create();
=======
        
>>>>>>> fce27e2cf45a7f5015be305c5feff25a253906f4

    }
}
