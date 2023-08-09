<?php

namespace App\Http\Controllers\Public\Product;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke($category_path, $product_path)
    {
        return view('public.product.index');
    }
}
