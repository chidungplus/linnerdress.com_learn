<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductImageController as BaseProductImage;

use Log;
use App\ProductImage;
class ProductImageController extends BaseProductImage
{
    public function store($product_id, $image_id){
        $productImage = ProductImage::create([
            'product_id' => $product_id,
            'image_id' => $image_id,
        ]);
        return $productImage->id;
    }

    public function getThumb($id){
        return ProductImage::find($id)->path;
    }

    public function countImage($product_id){
        return ProductImage::where('product_id',$product_id)->count();
    }
}
