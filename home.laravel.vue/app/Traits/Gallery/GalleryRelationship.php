<?php
namespace App\Traits\Gallery;

use App\Image;
use App\GalleryImage;
trait GalleryRelationship
{
    public function images()
    {
        // return $this->hasMany(Image::class, 'id', 'image_id');
        return $this->hasManyThrough(
            Image::class,
            GalleryImage::class,
            'gallery_id',
            'id',
            'id',
            'image_id',
        );
    }
}