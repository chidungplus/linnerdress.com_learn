<?php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // use HasFactory; laravel 8

    public $timestamps = false;

    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
}
