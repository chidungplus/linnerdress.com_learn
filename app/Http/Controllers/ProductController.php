<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Http\Controllers\Api\Front\ColorController;
use App\Http\Controllers\ImageController;
class ProductController extends Controller
{
    public function getList($params)
	{
		$products = Product::orderBy('id', 'desc')
			->paginate(4);
		$imageController = new ImageController;
		foreach($products as $row){
			$row->thumbnail = $imageController->getImage($row->thumb)->medium;
		}
		return $products;
	}

    public function getProduct($id){
		try{
            $product = Product::find($id);
            return $product;
        }catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public function getAdminId($id){

    }

	public function beautyInput($data)
	{
		$dataValidate = array();
		$dataValidate['admin_id'] = (isset($data['admin_id'])) ? $data['admin_id'] : 1;
		$dataValidate['permalink'] = (isset($data['permalink'])) ? $data['permalink'] : Str::random(50);
		if(isset($data['product_code'])) $dataValidate['product_code'] = $data['product_code'];
		if(isset($data['cost'])) $dataValidate['cost'] = $data['cost'];
		if(isset($data['price'])) $dataValidate['price'] = $data['price'];
		if(isset($data['price_rent'])) $dataValidate['price_rent'] = $data['price_rent'];
		if(isset($data['sort'])) $dataValidate['sort'] = $data['sort'];
		if(isset($data['category_id'])) $dataValidate['category_id'] = $data['category_id'];
		if(isset($data['color_id'])) $dataValidate['color_id'] = $data['color_id'];
		if(isset($data['thumb'])) $dataValidate['thumb'] = $data['thumb'];
		if(isset($data['sort'])) $dataValidate['sort'] = $data['sort'];
		if(isset($data['status'])) $dataValidate['status'] = $data['status'];
		if(isset($data['name'])) $dataValidate['name'] = $data['name'];
		if(isset($data['content'])) $dataValidate['content'] = $data['content'];
		if(isset($data['title'])) $dataValidate['title'] = $data['title'];
		if(isset($data['description'])) $dataValidate['description'] = $data['description'];
        $dataValidate['created_at'] = Carbon::now()->format('Y-m-d H:i:s');

		return $dataValidate;
	}

}
