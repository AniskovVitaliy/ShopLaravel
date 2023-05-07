<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ShowController extends Controller
{
    public function __invoke(Product $product)
    {
        $category = Category::find($product->category_id);

        return view('product.show', compact('product', 'category'));
    }
}
