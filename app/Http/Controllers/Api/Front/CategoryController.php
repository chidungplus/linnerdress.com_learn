<?php

namespace App\Http\Controllers\Api\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController as BaseCategory;
use App\Category;
class CategoryController extends BaseCategory
{
    public function getAll(){
        try{
            $categories = Category::get();
            return $categories;
        }catch(\Exception $e){
            
        }
    }
}
