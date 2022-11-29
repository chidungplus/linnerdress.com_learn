<?php

namespace App\Http\Controllers\Api\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController as BaseProduct;

use Log;
use App\Product;
class ProductController extends BaseProduct
{
    public function single(Request $request, $id){
        try{
            $params = $request->all();
            $product = Product::findOrFail($id);

            return response()->json([
                'err' => false,
                'product' => $product,
            ]);
        }catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Exeption.'
            ]);
        }
    }
}
