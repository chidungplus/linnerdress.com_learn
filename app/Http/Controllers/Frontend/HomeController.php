<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\ProductController;
class HomeController extends Controller
{
    public function test(){

        // dd(config());
        // Config::set('social.facebook.url', 'caigido');

        // echo config('google.analytic');
    }
    /**
     * return home
     */
    public function index(Request $request)
    {
        $productController = new ProductController;
        return $productController->index($request);
        
    }
    /**
     * return view policy
     */
    public function policy(){
        return view('shop.policy');
    }
    /**
     * return view document
     */
    public function document(){
        return view('shop.policy');
    }

    public function getJS(){
        return ['Free Fire'];
    }
}