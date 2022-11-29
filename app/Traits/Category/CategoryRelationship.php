<?php
namespace App\Traits\Category;
use App\Product;

trait CategoryRelationship
{
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}