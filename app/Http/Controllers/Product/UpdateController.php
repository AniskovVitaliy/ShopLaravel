<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        $productTag = ProductTag::find($product->id);
        $productColor = ColorProduct::find($product->id);

        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagsIds = $data['tags'];
        $colorsIds = $data['colors'];
        unset($data['tags'], $data['colors']);

        $product->update($data);

        foreach ($tagsIds as $tagsId) {
            $productTag->update([
                'product_id' => $product->id,
                'tag_id' => $tagsId,
            ]);
        }

        foreach ($colorsIds as $colorsId) {
            $productColor->update([
                'product_id' => $product->id,
                'color_id' => $colorsId,
            ]);
        }

        $category = Category::find($product->category_id);

        return view('product.show', compact('product', 'category'));
    }

}
