<?php

namespace App\Http\Controllers\Api\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use App\Http\Controllers\Api\Front\CategoryController;
use App\Category;
use App\Product;
use App\Image;
use App\Repositories\Home\HomeRepository;

class HomeController extends Controller
{
    protected $_homeRepository;

    public function __construct(HomeRepository $homeRepository)
    {
        $this->_homeRepository = $homeRepository;
    }
    // public function index(Request $request){
    //     try{
    //         $params = $request->all();
    //         // $categoryController = new CategoryController;
    //         // $categories = $categoryController->getAll();

    //         $categories = Category::select('id','permalink', 'name')
    //         ->get();

    //         foreach($categories as $category){
    //             $category->permalink = '/danh-muc/'. $category->permalink;
    //             $category->products = Product::where('category_id',$category->id)
    //             ->orderBy('sort', 'desc')
    //             ->limit(4)
    //             ->select('id','permalink', 'name','cost','price','thumb')
    //             ->get();
    //             foreach($category->products as $product){
    //                 $product->permalink = '/product/'. $product->permalink;
    //                 $product->thumbnail = '/storage/'. Image::findOrFail($product->thumb)->medium;
    //             }
    //         }
            
    //         return response()->json([
    //             'err' => false,
    //             'data' => $categories,
    //         ]);
    //     }catch(\Exception $e){
    //         Log::error($e);
    //         return response()->json([
    //             'err' => true,
    //             'msg' => 'Error Exeption.'
    //         ]);
    //     }
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relationship = [
            'products',
            'products.color',
            'products.images',
            'products.thumb',
        ];
        $categories = $this->_homeRepository->getProductByCategories($relationship);

        return $categories;
    }
}
