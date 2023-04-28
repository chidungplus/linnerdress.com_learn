<?php

namespace App\Traits\Image;
use Illuminate\Support\Str;

trait ImageAttribute
{
    public function getPathAttribute()
    {
        return strpos($this->attributes['path'], 'http') !== false ? $this->attributes['path'] : "/storage/" .$this->attributes['path']; 
    }
}