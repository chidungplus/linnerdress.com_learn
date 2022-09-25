<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\PermissionController as BasePermission;

use App\Permission;
class PermissionController extends BasePermission
{
    public function index(){
        $permissions = Permission::get();
        return view('admin.permission.index',['permissions' => $permissions]);
    }

}
