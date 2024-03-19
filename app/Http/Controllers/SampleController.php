<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentService;
use App\Services\CategoryService;
use App\Models\Post;
use App\Models\Category;

class SampleController extends Controller
{

    public function __construct(public Post $posts, public Category $categories)
    {

    }

    public function index()
    {
        return $this->posts->all();
    }
}
