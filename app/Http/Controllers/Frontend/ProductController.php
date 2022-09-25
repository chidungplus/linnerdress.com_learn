<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController as BaseProduct;

use Log;
use App\Product;
use App\Http\Controllers\Frontend\ImageController;
use App\Http\Controllers\Frontend\ProductImageController;
class ProductController extends BaseProduct
{
    function index(Request $request){
        $imageController = new ImageController;
        // $rank = $this->getFilterRank($request->rank);
        // $price = $this->getFilterPrice($request->price);

        // $sql = $price . $rank . ' status = 1'; whereRaw($sql)
        $productsDC = Product::where('category_id',1)->orderBy('sort', 'desc')
        ->paginate(8);
        $productsVD = Product::where('category_id',2)->orderBy('sort', 'desc')
        ->paginate(8);
        $productsVN = Product::where('category_id',3)->orderBy('sort', 'desc')
        ->paginate(8);
        $productsML = Product::where('category_id',4)->orderBy('sort', 'desc')
        ->paginate(8);

        foreach ($productsDC as $row) {
            $row->thumbnail = $imageController->getImage($row->thumb)->medium;
        }
        foreach ($productsVD as $row) {
            $row->thumbnail = $imageController->getImage($row->thumb)->medium;
        }
        foreach ($productsVN as $row) {
            $row->thumbnail = $imageController->getImage($row->thumb)->medium;
        }
        foreach ($productsML as $row) {
            $row->thumbnail = $imageController->getImage($row->thumb)->medium;
        }


        // dd($products);

        return view('shop.product.index',
            [
                'productsDC'=>$productsDC, 
                'productsVD'=>$productsVD, 
                'productsVN'=>$productsVN, 
                'productsML'=>$productsML
            ]
        );
    }   

    public function single(Request $request, $permalink){
        $product = Product::where('permalink', $permalink)->first();

        $imageController = new ImageController;
        $product->thumbImage = $imageController->getImage($product->thumb);
        if($product->thumbImage->large == ''){
            $product->thumbImage->large = $product->thumbImage->path;
        }

        $productImageController = new ProductImageController;
        $product->images = $productImageController->getWithProduct($product->id);

        foreach($product->images as $row){
            $row->image =  $imageController->getImage($row->image_id);
            if($row->image->large == ''){
                $row->image->large = $row->image->path;
            }
        }

        $productSame = Product::where('category_id', $product->category_id)
            ->where('id', '<>', $product->id)
            ->orderBy('sort', 'desc')
            ->take(3)
            ->get();
        foreach ($productSame as $row) {
            $row->thumbnail = $imageController->getImage($row->thumb)->medium;
        }

        return view('shop.product.single',['product'=>$product, 'productSame' => $productSame]);
    }
}
