<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        Storage::disk('public')->delete($product->preview_image);

        $productTag = ProductTag::find($product->id);
        $productColor = ColorProduct::find($product->id);

        $productTag->delete();
        $productColor->delete();
        $product->delete();

        return redirect()->route('product.index');
    }
}
