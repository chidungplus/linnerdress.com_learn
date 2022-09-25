<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class UserController extends Controller
{
    public function find($id){
        try{
            return User::find($id);
        }catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public function getUser($id){
        try{
            return User::findOrFail($id);
        }catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public function updateCash($user_id, $new_cash){
        try{
            User::where('id', $user_id)->limit(1)->update([
                'cash' => $new_cash,
            ]);
            return true;
        }catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public function updateDiamond($user_id, $diamond){
        try{
            User::where('id', $user_id)->limit(1)->update([
                'diamond' => $diamond,
            ]);
            return true;
        }catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public function validateUpdateCash($data){
        try{
            $validator = Validator::make($data, [
                'amount'  => 'required',
                'type'        => [
                    'required',
                    Rule::in(array(
                        '1',
                        '2'
                    )),
                ],
            ]);
            if ($validator->fails()) {
                # return message error
                return $validator->errors()->first();
            }
            return true;
        }catch (\Exception $e) {
            Log::error($e);
            return "Xác thực update cash.";
        } 
        
    }

    public function validateUpdateDiamond($data){
        try{
            $validator = Validator::make($data, [
                'amount'  => 'required',
                'type'        => [
                    'required',
                    Rule::in(array(
                        '1',
                        '2'
                    )),
                ],
            ]);
            if ($validator->fails()) {
                # return message error
                return $validator->errors()->first();
            }
            return true;
        }catch (\Exception $e) {
            Log::error($e);
            return "Xác thực update diamond.";
        } 
        
    }
}
