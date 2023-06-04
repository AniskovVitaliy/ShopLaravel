<?php

namespace App\Http\Controllers\Admin\Product;

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

        $productTags = ProductTag::where('product_id', $product->id)->get();
        $productColors = ColorProduct::where('product_id', $product->id)->get();

        foreach ($productTags as $tag)
        {
            $tag->delete();
        }

        foreach ($productColors as $color)
        {
            $color->delete();
        }

        $product->delete();

        return redirect()->route('admin.product.index');
    }
}
