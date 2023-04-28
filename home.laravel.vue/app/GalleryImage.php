<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class GalleryImage extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'gallery_id',
        'image_id'
    ];
}
