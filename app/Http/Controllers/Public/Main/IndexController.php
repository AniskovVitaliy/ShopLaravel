<?php

namespace App\Http\Controllers\Public\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::limit(4)->get();
        $categories = Category::limit(4)->get();

        return view('public.main.index', compact('products', 'categories'));
    }
}
