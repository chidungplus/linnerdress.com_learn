<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\ProductItem;
use App\Gallery;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Repositories\Product\ProductRepository;

class ProductController extends Controller
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepo = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Auth::user()->authorizePermission('product_view');
        $products = $this->productRepo->getAll();
        

        // return $products;

		return view('admin.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Auth::user()->authorizePermission('product_create');

		return view('admin.product.create');
    }

    public function productItem($id)
    {
        return view('admin.product.product-item',['product_id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {	
    	try{
	        // Auth::user()->authorizePermission('product_create');
			$data = $request->all();
			// $dataBeauty = $this->beautyInput($data);

            $id = Product::insertGetId([
                'permalink' => 'vay-da-hoi-'.$data['product_code'],
                'name' => $data['name'],
                'category_id' => $data['category_id'],
                'product_code' => $data['product_code'],
            ]);

            return response()->json([
            	'err' => false,
            	'id' => $id,
				'msg' => 'Đăng thành công.'
            ]);
        }catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Đăng thất bại.'
            ]);
        }
    }

    public function storeProductItem(Request $request)
    {
        try{
	        // Auth::user()->authorizePermission('product_create');
			$data = $request->all();
			// $dataBeauty = $this->beautyInput($data);

            $sizes = array(
                'S',
                'M',
                'L',
                'XL'
            );
            $gallery = Gallery::create([]);
            foreach($sizes as $row){
                

                $id = ProductItem::create([
                    'product_id' => $data['product_id'],
                    'name' => $data['name'],
                    'avatar_id' => $data['avatar_id'],
                    'thumbnail_id' => $data['thumb_id'],
                    // 'gallery_id' => $data['gallery_id'],
                    'color_value' => $data['color_value'],
                    'size_value' => $row,
                    'color_id' => $data['color_id'],
                    'cost' => $data['cost'],
                    'price' => $data['price'],
                    'quantity' => rand(5,10),
                    'gallery_id' => $gallery->id,
                ]);
            }

            return response()->json([
            	'err' => false,
				'msg' => 'Đăng thành công.'
            ]);
        }catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Đăng thất bại.'
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Auth::user()->authorizePermission('product_edit');
        $product = Product::find($id);
        $imageController = new ImageController;
        $product->thumbImage = $imageController->getImage($product->thumb);

        $productImageController = new ProductImageController;
        $product->images = $productImageController->getWithProduct($product->id);

        foreach($product->images as $row){
            $row->image =  $imageController->getImage($row->image_id);
        }

		return view('admin.product.edit',['product' => $product]);
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
        Auth::user()->authorizePermission('product_edit');
		$data = $request->all();
		$dataBeauty = $this->beautyInput($data);
		Product::where('id',$id)
            ->update($dataBeauty);
		return response()->json([
			'err' => false,
			'id' => $id,
			'msg' => 'Thành công!'
		]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Auth::user()->authorizePermission('product_delete');
            $product = Product::find($id);
            $product->delete();
            return response()->json([
                'err' => false,
                'msg' => 'Xoá thành công.'
            ]);    
		}catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Delete false!'
            ]);
        }
        
    }

    public function image(Request $request, $product_id)
	{
		try{
			if(!$request->file('file')){
				return response()->json([
                    'err' => true,
                    'msg' => 'Vui lòng chọn hình ảnh.'
                ]);
			}
			$file = $request->file('file');
			# upload
			$imageController = new ImageController;
			$image = $imageController->handleUpload($file);
			# add path to db and get id accimage
			$productImageController = new ProductImageController;
			$productImageId = $productImageController->store($product_id, $image->id);

			return response()->json([
				'err' => false,
				'msg' => 'Thành công.',
			]);
		}catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Something went wrong!'
            ]);
        }
	}
}
