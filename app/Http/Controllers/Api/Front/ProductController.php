<?php

namespace App\Http\Controllers\Api\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController as BaseProduct;

use Log;

class ProductController extends BaseProduct
{
    public function index(Request $request){
        try{
            $params = $request->all();
            $products = $this->getList($params);
            return $products;
        }catch(\Exception $e){
            
        }
    }
}
