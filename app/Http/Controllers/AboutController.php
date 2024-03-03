<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;


class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // for($i=101; $i<406; $i++)
        // {
        //     $post = Post::find($i);

        //     $post->tags()->attach(rand(1,4));
        // }

        // dd('suxsex');

        // $posts = Tag::find(4)->posts;

        // return $posts;

        $tags= Post::find(140)->tags;

        return $tags;
    }
}
