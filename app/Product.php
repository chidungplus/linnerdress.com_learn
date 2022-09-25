<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'admin_id', 'product_code', 'cost', 'price', 'price_rent', 'name', 'content', 'title', 'description', 'status', 'thumb', 'sort', 'category_id'
    ];
}
