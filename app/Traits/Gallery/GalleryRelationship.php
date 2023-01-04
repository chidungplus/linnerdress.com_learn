<?php
namespace App\Traits\Gallery;

use App\Image;

trait GalleryRelationship
{
    public function images()
    {
        return $this->hasMany(Image::class, 'id', 'image_id');
    }
}