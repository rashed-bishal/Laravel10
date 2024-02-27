<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $str1 = 'Dhaka';
        $str2 = 'metro';

        return view('test',compact('str1','str2'));
    }
}
