<?php

namespace App;

use App\Traits\Category\CategoryRelationship;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    use CategoryRelationship;

    protected $table = 'categories';
    protected $fillable = [
        'permalink', 'parent_id', 'name', 'content', 'title', 'description'
    ];
}
