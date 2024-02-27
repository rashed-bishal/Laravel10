<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $str1 = 'Hello World';
        $str2 = 'Hello Bangladesh';

        return view('test', compact('str1', 'str2'));
    }
}
