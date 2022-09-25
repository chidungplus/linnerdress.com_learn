<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\RoleController as BaseRole;

use Log;
use App\Role;
class RoleController extends BaseRole
{
    public function index(){
        $roles = Role::paginate(10);
        return view('admin.role.index',['roles' => $roles]);
    }

    public function create(){
        return view('admin.role.create');
    }

    public function store(Request $request){
        try{
	        // Auth::user()->authorizePermission('acc_ff_create');
			$data = $request->all();
			$dataBeauty = $this->beautyInput($data);

            $id = Role::insertGetId($dataBeauty);

            return response()->json([
            	'err' => false,
				'msg' => 'Store Success!'
            ]);
        }catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Excetion'
            ]);
        }
    }

    public function edit($id){
        $role = Role::find($id);
        return view('admin.role.edit',['role' => $role]);
    }

    public function update(Request $request, $id){
        try{
	        // Auth::user()->authorizePermission('acc_ff_create');
			$data = $request->all();
			$dataBeauty = $this->beautyInput($data);
            Log::debug($request);
            Log::debug($id);
            Log::debug($dataBeauty);

            Role::where('id',$id)
                ->update($dataBeauty);

            return response()->json([
            	'err' => false,
				'msg' => 'Update Success!'
            ]);
        }catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Excetion'
            ]);
        }
    }

    public function destroy($id){
        try{
            $role = Role::find($id);
            $role->delete();
            return response()->json([
            	'err' => false,
				'msg' => 'Delete Success!'
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
