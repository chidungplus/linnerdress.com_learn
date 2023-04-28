<?php

namespace App;

use App\Traits\Product\ProductRelationship;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use ProductRelationship;
    
    protected $table = 'products';
    protected $fillable = [
        'admin_id', 
        'product_code', 
        'cost', 
        'price', 
        'price_rent', 
        'name', 
        'content', 
        'title', 
        'description', 
        'status', 
        'thumb', 
        'sort', 
        'category_id'
    ];
}
