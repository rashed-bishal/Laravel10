<?php

namespace App\Services;
use App\Models\Category;


class CategoryService
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function categories()
    {
        return $this->category;
    }


}