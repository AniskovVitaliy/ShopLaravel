<?php

namespace App\Http\Controllers\Public\Category;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('public.category.index');
    }
}
