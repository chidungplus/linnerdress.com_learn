<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\UserLogController as BaseUserLog;

use App\UserLog;
use Log;
use Illuminate\Support\Facades\Auth;
class UserLogController extends BaseUserLog
{
    public function create($data){
        try{
            $dataValidate = $this->validateForm($data);
            if($dataValidate !== true){
                return false;
            }
            UserLog::create($data);
            return true;
        }catch(\Exception $e){
            Log::error($e);
        }
    }
}
