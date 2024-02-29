<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Post::create([
        //     'title' => 'This is my custom title',
        //     'description' => 'This is my custom description',
        //     'status' => false,
        //     'published_date' => date('Y-m-d'),
        //     'user_id' => 2204,
        //     'category_id' => 6,
        // ]);

        Post::where('id', 9)->update([
            'description' => 'Custom Description has been updated!',
        ]);

        dd('Post Updated');
    }
}