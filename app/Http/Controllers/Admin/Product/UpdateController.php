<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $requestData = $request->validated();

        $this->updateTags($requestData['tags'], $product->id);
        $this->removeUnselectTags($requestData['tags'], ProductTag::where('product_id', $product->id)->get());

        $this->updateColors($requestData['colors'], $product->id);
        $this->removeUnselectColors($requestData['colors'], ColorProduct::where('product_id', $product->id)->get());

        unset($requestData['tags'], $requestData['colors']);

        Storage::disk('public')->delete($product->preview_image); // Удалит старое фото для данного товара
        $requestData['preview_image'] = Storage::disk('public')->put('/images', $requestData['preview_image']);

        $product->update($requestData);

        $category = Category::find($product->category_id);

        return view('admin.product.show', compact('product', 'category'));
    }

    private function updateTags($tagsIds, $productId)
    {
        foreach ($tagsIds as $tagId)
        {
            ProductTag::updateOrCreate([
                'product_id' => $productId,
                'tag_id' => $tagId,
            ],[
                'product_id' => $productId,
                'tag_id' => $tagId,
            ]);
        }
    }

    private function removeUnselectTags($requestTags, $dbTags)
    {
        foreach ($dbTags as $tag){
            if(!in_array($tag->tag_id, $requestTags))
            {
                $tag->delete();
            }
        }
    }

    private function updateColors($colorsId, $productId)
    {
        foreach ($colorsId as $colorId)
        {
            ColorProduct::updateOrCreate([
                'product_id' => $productId,
                'color_id' => $colorId,
            ],[
                'product_id' => $productId,
                'color_id' => $colorId,
            ]);
        }
    }

    private function removeUnselectColors($requestColors, $dbColors)
    {
        foreach ($dbColors as $color){
            if(!in_array($color->color_id, $requestColors))
            {
                $color->delete();
            }
        }
    }

}
