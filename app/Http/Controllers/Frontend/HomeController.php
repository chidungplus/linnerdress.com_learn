<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\ProductController;
use App\Jobs\SendEmail;
use App\User;
use App\Product;

use Cart;
class HomeController extends Controller
{
    public function vue(){
        return view('layouts.vue');
    }
    public function test(){

        $users = User::all();
        $message = [
            'type' => 'Create task',
            'task' => "Nguyễn Chí Dũng",
            'content' => '0965.346.910',
        ];
        SendEmail::dispatch($message, $users)->delay(now()->addMinute(1));

        return 'Success.';

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