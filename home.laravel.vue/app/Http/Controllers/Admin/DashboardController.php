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
}
