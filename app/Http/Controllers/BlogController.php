<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\CustomTrait;

class BlogController extends Controller
{

    use CustomTrait;

    public function index(string $txt)
    {
        echo $this->modText($txt);
    }

    public function custom(string $title)
    {
        dd(slug($title));
    }
}
