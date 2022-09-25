<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\UserLogController as BaseUserLog;

use App\UserLog;
use Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;

class UserLogController extends BaseUserLog
{
    public function index(){
        Auth::user()->authorizePermission('user_log_view');
        $userLogs = UserLog::orderBy('id', 'desc')
            ->paginate(10);     
        $userController = new UserController;   
        foreach($userLogs as $row){
            $row->getNameUser     = $userController->getUser($row->user_id)->name;
        }
        return view('admin.user-log.index',['userLogs'=>$userLogs]);
    }
}
