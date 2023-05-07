<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        $productTag = ProductTag::find($product->id);
        $productColor = ColorProduct::find($product->id);

        $productTag->delete();
        $productColor->delete();
        $product->delete();

        return redirect()->route('product.index');
    }
}
