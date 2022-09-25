<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'permalink', 'parent_id', 'name', 'content', 'title', 'description'
    ];
}
