<?php
namespace App\Traits\ProductItem;
use App\Color;
use App\Gallery;
use App\Image;
use App\ProductImage;
use App\ProductItem;
use App\ProductItemSize;

trait ProductItemRelationship
{
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function colorAvatar()
    {
        return $this->belongsTo(Image::class, 'color_avatar_id');
    }

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'gallery_id');
    }

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
    // public function thumb()
    // {
    //     return $this->hasOne(Image::class, 'id', 'thumb');
    // }
    public function sizes()
    {
        return $this->hasMany(ProductItemSize::class, 'product_item_id', 'id');
    }
}