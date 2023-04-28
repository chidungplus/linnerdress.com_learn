<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    protected $fillable = [
        'user_id', 'action', 'model', 'cash_after', 'cash_before', 'diamond_after', 'diamond_before', 'note',
    ];
}
