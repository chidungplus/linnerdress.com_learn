<?php

namespace App\Http\Controllers\Api\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\CartController as BaseCart;

use Log;
use Cart;
use App\Http\Controllers\Api\Front\ProductController;
class CartController extends BaseCart
{
    public function cart(Request $request){
        $data = $request->all();
        $productController = new ProductController;
        $products = $productController->getList($data);

        # show cart view
        // $cart = Cart::content();
        // dd($cart);
        return response()->json($products);

        // return view('shop.cart.checkout');
    }
}
