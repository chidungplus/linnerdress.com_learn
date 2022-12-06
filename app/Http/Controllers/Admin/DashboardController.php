<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Image;

class DashboardController extends Controller
{   
    function hello(Request $request){
    	return view ('admin.dashboard.hello');
    }
    public function test(){
        $images = Image::get();
        foreach($images as $row){
            $row->update([
                'thumbnail' => $row->medium,
            ]);
        }
    }
}
