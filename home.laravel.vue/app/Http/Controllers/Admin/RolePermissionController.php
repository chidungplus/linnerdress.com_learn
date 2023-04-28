<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\RolePermission;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
class RolePermissionController extends Controller
{
    public function show($role_id){
        $roleController = new RoleController;
        $role = $roleController->getRole($role_id);

        $permissionController = new PermissionController;
        $permissions = $permissionController->getAll();

        $rolePermissions = RolePermission::where('role_id',$role_id)->get();
        

        foreach($permissions as $key => $row){
            foreach($rolePermissions as $key2 => $value){
                if($row->id == $value->permission_id){
                    $row->checked = true;
                    break;
                }
            } 
        }
        // dd($permissions);
        return view('admin.role-permission.permission',['permissions' => $permissions, 'role' => $role]);
    }

    public function update(Request $request){
        try{
	        // Auth::user()->authorizePermission('acc_ff_create');
			$data = $request->all();
            $role_id = $data['role_id'];
            $permission_id = $data['permission_id'];
            $value = $data['value'];
            if($value == 1){
                RolePermission::create([
                    'role_id' => $role_id,
                    'permission_id' => $permission_id,
                ]);
            }else{
                $role_permission = RolePermission::where('role_id',$role_id)
                    ->where('permission_id',$permission_id)
                    ->delete();
            }
            return response()->json([
            	'err' => false,
				'msg' => 'Permission Success!'
            ]);
        }catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Excetion'
            ]);
        }
    }
}
