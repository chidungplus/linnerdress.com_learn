<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Image\ImageAttribute;
class Image extends Model
{
    use ImageAttribute;
    
    protected $fillable = [
        'path', 'thumbnail', 'medium', 'large',
    ];
}
