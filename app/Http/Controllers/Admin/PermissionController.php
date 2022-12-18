<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Permission;
class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::get();
        return view('admin.permission.index',['permissions' => $permissions]);
    }
    public function getPermission($id){
        return Permission::find($id);
    }

    public function getAll(){
        return Permission::get();
    }

}
