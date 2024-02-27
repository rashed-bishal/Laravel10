<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $insert = DB::table('posts')->insert([
            'title'=>'Epilogue',
            'description' => 'A quick brown fox jumps over the lazy dog',
            'status' => 0,
            'published_date' => date('Y-m-d'),
            'user_id' => 104,

        ]);

        return  $insert;
    }
}
