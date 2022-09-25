<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class UserLogController extends Controller
{
    public function validateForm($data){
        try{
            $validator = Validator::make($data, [
                'user_id'  => 'required',
                'action'  => 'required',
                'model'  => 'required',

            ]);
            if ($validator->fails()) {
                # return message error
                return $validator->errors()->first();
            }
            return true;
        }catch (\Exception $e) {
            Log::error($e);
            return "Xác thực user log false";
        } 
        
    }
}
