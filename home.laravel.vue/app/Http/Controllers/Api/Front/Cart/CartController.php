<?php

namespace App\Http\Controllers\Api\Front\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\StoreCartRequest;
use App\Repositories\ProductItemSize\ProductItemSizeRepository;
use Illuminate\Support\Fluent;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        try {
            foreach ($request->all() as $cart) {
                $cart = new Fluent($cart);
                app(ProductItemSizeRepository::class)->updateQuantity($cart->sizeId, $cart->quantity);
            }

            return response()->json([
                'status' => true
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false
            ], 500);
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
