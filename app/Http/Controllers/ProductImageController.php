<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\ProductImage;
class ProductImageController extends Controller
{
    public function getWithProduct($product_id){
        return ProductImage::where('product_id',$product_id)->get();
    }
}
