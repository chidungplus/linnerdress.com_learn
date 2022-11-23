<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\CartController as BaseCart;

use Log;
use Cart;
use App\Http\Controllers\Frontend\ProductController;
class CartController extends BaseCart
{
    public function cart(){
        # show cart view
        // $cart = Cart::content();
        // dd($cart);
        return view('shop.cart.checkout');
    }
    public function payment(){
        return view('shop.cart.payment');
    }
    public function cartBottom(){
        return view('shop.cart.payment_cart_bottom');
    }

    public function buyNow(){
        try{
            $id = $request->id;
            $quantity = $request->quantity;
            # get product
            $productController = new ProductController;
            $product = $productController->getProduct($id);
            # add to cart
            Cart::add([
                'id' => $product['id'],
                'name' => $product['name'],
                'qty' => $quantity,
                'price' => $product['price'],
                'weight' => 0,
                'options' => [
                    'size' => 'L',
                ]
            ]);
            return redirect()->route('cart');
        }
        catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Excetion'
            ]);
        }
    }

    public function count(){
        try{
            return response()->json([
                'err' => false,
                'msg' => Cart::count()
            ]);
        }catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Excetion'
            ]);
        }
    }

    public function addToCart(Request $request){
        try{
            $id = $request->id;
            $quantity = $request->quantity;
            # get product
            $productController = new ProductController;
            $product = $productController->getProduct($id);
            # add to cart
            Cart::add([
                'id' => $product['id'],
                'name' => $product['name'],
                'qty' => $quantity,
                'price' => $product['price'],
                'weight' => 0,
                'options' => [
                    'size' => 'L',
                ]
            ]);
            return response()->json([
                'err' => false,
                'msg' => 'Add to cart Successs.'
            ]);
        }
        catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Excetion'
            ]);
        }
    }

    public function updateCart(Request $request){
        # get product
        # add to cart
    }

    public function destroyCart(){
        # show cart view
    }
    
}
