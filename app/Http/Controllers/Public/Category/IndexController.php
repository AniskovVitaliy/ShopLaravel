<?php

namespace App\Http\Controllers\Public\Category;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke($category_path)
    {
        return view('public.category.index');
    }
}
