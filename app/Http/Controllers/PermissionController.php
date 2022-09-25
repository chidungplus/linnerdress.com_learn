<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Permission;
class PermissionController extends Controller
{
    public function getPermission($id){
        return Permission::find($id);
    }

    public function getAll(){
        return Permission::get();
    }
}
