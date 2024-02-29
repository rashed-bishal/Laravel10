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
        $post = new Post();
        $post->title = '8th Post';
        $post->description = 'This is inside eighth post';
        $post->status = false;
        $post->published_date = date('Y-m-d');
        $post->user_id = 3549;
        $post->category_id = 4;
        $post->save();

        dd($post->all());

    }
}