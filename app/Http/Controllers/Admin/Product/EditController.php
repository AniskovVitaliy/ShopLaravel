<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();

        return view('admin.product.edit', compact('product', 'tags', 'colors', 'categories'));
    }
}
