<?php
namespace App\Traits\ProductItem;
use App\Color;
use App\Gallery;
use App\Image;
use App\ProductImage;
use App\ProductItem;

trait ProductItemRelationship
{
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
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
}