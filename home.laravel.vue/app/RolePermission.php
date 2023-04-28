<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    protected $table = 'permission_role';
    public $timestamps = false;

    protected $fillable = [
        'role_id',
        'permission_id',
    ];
}
