<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController as BaseCategory;

use Log;
use App\Category;
use App\Product;
use App\Http\Controllers\Frontend\ImageController;
class CategoryController extends BaseCategory
{
    public function single(Request $request, $permalink){
        $category = Category::where('permalink', $permalink)->first();

        $products = Product::where('category_id',$category->id)->orderBy('sort', 'desc')
        ->paginate(8);
        $imageController = new ImageController;
        foreach ($products as $row) {
            $row->thumbnail = $imageController->getImage($row->thumb)->medium;
        }
        return view('shop.category.single',['category'=>$category, 'products' => $products]);
    }
}
