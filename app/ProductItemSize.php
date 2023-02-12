<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductItemSize extends Model
{
    protected $table = 'product_item_sizes';

    protected $fillable = [
        'quantity'
    ];
}
