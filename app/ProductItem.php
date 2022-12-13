<?php

namespace App;

use App\Traits\ProductItem\ProductItemRelationship;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use ProductItemRelationship;
    protected $table = 'product_items';

    protected $fillable = [
        'product_id',
        'color_id',
        'size',
        'quantity',
        'cost',
        'price',
        'price_rent',
        'thumb',
        'code',
        'bar_code',
        'name'
    ];
}
