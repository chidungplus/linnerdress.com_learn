<?php
namespace App\Traits\Product;
use App\Color;
use App\Image;
use App\ProductImage;
use App\ProductItem;

trait ProductRelationship
{
    // public function images()
    // {
    //     return $this->hasManyThrough(
    //         Image::class,
    //         ProductImage::class,
    //         'image_id',
    //         'id',
    //         'id'
    //     );
    // }

    public function productItems()
    {
        return $this->hasMany(ProductItem::class);
    }
}