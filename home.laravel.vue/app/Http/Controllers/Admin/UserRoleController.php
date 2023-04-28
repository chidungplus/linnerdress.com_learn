<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\UserRole;
use App\Http\Controllers\Admin\UserRoleController;
use App\Http\Controllers\Admin\RoleController;
class UserRoleController extends Controller
{
    public function index(){
        // show list user có quyền
        $users = UserRole::select('user_id', \DB::raw('count(*) as count'))
        ->groupBy('user_id')
        ->get();
        $userController = new UserController;
        foreach($users as $row){
            $user = $userController->getUser($row->user_id);
            $row->name = $user->name;
            $row->email = $user->email;
        }
        return view('admin.user-role.index',['users' => $users]);
    
    }
    public function create(){
        // form thêm mới 1 user vào 1 quyền
        return view('admin.user-role.create');
    }

    public function store(Request $request){
        try{
	        // Auth::user()->authorizePermission('acc_ff_create');
			$data = $request->all();
            $user_id = $data['user_id'];
            $role_id = $data['role_id'];

            UserRole::create([
                'user_id' => $user_id,
                'role_id' => $role_id
            ]);

            return response()->json([
            	'err' => false,
				'msg' => 'Create Success!'
            ]);
        }catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Excetion'
            ]);
        }
    }

    public function show($user_id){
        // show vai trò của 1 user
        $userController = new UserController;
        $user = $userController->getUser($user_id);

        $roleController = new RoleController;
        $roles = $roleController->getAll();

        $userRoles = UserRole::where('user_id',$user_id)->get();
        

        foreach($roles as $key => $row){
            foreach($userRoles as $key2 => $value){
                if($row->id == $value->role_id){
                    $row->checked = true;
                    break;
                }
            } 
        }
        // dd($roles);
        return view('admin.user-role.show',['roles' => $roles, 'user' => $user]);
    }

    public function update(Request $request){
        // cập nhật các vai trò của user
        try{
	        // Auth::user()->authorizePermission('acc_ff_create');
			$data = $request->all();
            $user_id = $data['user_id'];
            $role_id = $data['role_id'];
            $value = $data['value'];
            if($value == 1){
                UserRole::create([
                    'user_id' => $user_id,
                    'role_id' => $role_id
                ]);
            }else{
                UserRole::where('user_id',$user_id)
                    ->where('role_id',$role_id)
                    ->delete();
            }
            return response()->json([
            	'err' => false,
				'msg' => 'Role Success!'
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
