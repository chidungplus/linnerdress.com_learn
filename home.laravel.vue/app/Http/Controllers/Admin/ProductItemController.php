<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductItem;
class ProductItemController extends Controller
{
    public function gallery($id)
    {
        $productItem = ProductItem::findOrFail($id);
        return view('admin.product-item.gallery', ['productItem' => $productItem]);
    }

    
}
