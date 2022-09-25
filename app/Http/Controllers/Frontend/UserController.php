<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController as BaseUser;

use Illuminate\Support\Facades\Auth;

use App\User;
use Log;
use App\Http\Controllers\Frontend\CardController;
use App\Http\Controllers\UserAccController;
use App\Http\Controllers\Frontend\UserRandomController;
use App\Http\Controllers\Frontend\WheelController;
use App\Http\Controllers\Frontend\WithdrawController;

class UserController extends BaseUser
{
    public function profile()
    {
    	$user = Auth::user();
    	return view('shop.user.profile',['user'=>$user]);
    }
    
    /**
     * function historyChargingCard()
     * show view history charging card
     */
    public function historyChargingCard()
    {
        $cardController = new CardController;
        $cards = $cardController->historyCharging();

    	return view('shop.user.history.charging-card',['cards'=>$cards]);
    }

    public function historyBuyAcc()
    {
        $user_id = Auth::user()->id;
        $userAccController = new UserAccController;
        $accs = $userAccController->history($user_id);
    	return view('shop.user.history.buy-acc',['accs'=>$accs]);
    }

    public function historyRandom()
    {
        $user_id = Auth::user()->id;
        $userRandomController = new UserRandomController;
        $accs = $userRandomController->history($user_id);
    	return view('shop.user.history.random',['accs'=>$accs]);
    }

    public function historyWheel()
    {
        $user_id = Auth::user()->id;
        $wheelController = new WheelController;
        $wheels = $wheelController->history($user_id);
    	return view('shop.user.history.wheel',['wheels'=>$wheels]);
    }

    public function historyWithdraw()
    {
        $user_id = Auth::user()->id;
        $withdrawController = new WithdrawController;
        $withdraws = $withdrawController->history($user_id);
    	return view('shop.user.history.withdraw',['withdraws'=>$withdraws]);
    }

    public function detail(){
        try{
            $user_id = Auth::user()->id;
            $user = $this->find($user_id);
            $data = array();
            $data['cash'] = number_format($user->cash) . " VNĐ";
            $data['diamond'] = number_format($user->diamond);
            return response()->json([
                'err' => false,
                'msg' => $data
            ]);
        }catch(Exception $e){
            return response()->json([
                'err' => true,
                'msg' => 'Error Exception.'
            ]);
        }
        
    }

    public function getRandomUser(){
        try{
            $count_user = User::count();
            $user_id = rand(1,$count_user);
            $user = User::find($user_id);
            return $user;
        }catch(Exception $e){
            Log::error($e);
            return false;
        }
    }
    
    
}