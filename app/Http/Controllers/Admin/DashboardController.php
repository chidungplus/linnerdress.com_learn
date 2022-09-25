<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{   
    function hello(Request $request){
    	return view ('admin.dashboard.hello');
    }
}
