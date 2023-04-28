<?php

namespace App;

use App\Traits\Gallery\GalleryRelationship;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use GalleryRelationship;
}
