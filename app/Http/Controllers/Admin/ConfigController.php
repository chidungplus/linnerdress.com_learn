<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\ConfigController as BaseConfig;

use Illuminate\Support\Facades\Auth;
use App\Config;
use Artisan;
class ConfigController extends BaseConfig
{
    function index(){
        return view('admin.config.edit');
    }

    function edit(){
    	try{
    		// Auth::user()->authorizeRoles('config_view');
    		return view('admin.config.edit');
    	}catch(\Exception $e){
            
        }
    }
  
    function update(Request $request){
    	try{
    		// Auth::user()->authorizeRoles('config_edit');
    		foreach ($request->all() as $key => $row) {
    			if(!isset($row)) $row = '';

    			Config::where('name', $key)
    			->update([
    				'value' => $row
    			]);
    		}
            Artisan::call('cache:clear');
            Artisan::call('config:cache');

	        return response()->json([
                'err' => false,
                'msg' => "Thành công"
            ]);

	    }catch(\Exception $e){
            return response()->json([
                'err' => true,
                'msg' => $e->getMessage()
            ]);
        }
    }
}
