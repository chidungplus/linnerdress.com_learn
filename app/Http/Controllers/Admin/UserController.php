<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController as BaseUser;

use App\User;
use Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\UserAccFireController;
use App\Http\Controllers\Admin\UserRandomController;
use App\Http\Controllers\Admin\WheelController;
use App\Http\Controllers\Admin\WithdrawController;
class UserController extends BaseUser
{
    /**
     * return list user
     */
    public function index()
    {
        try{
            Auth::user()->authorizePermission('user_view');
            $users = User::orderBy('id', 'desc')
            ->paginate(14);        
            return view('admin.user.index',['users'=>$users]);
        }catch(\Exception $e){
            Log::error($e);
            abort(500);
        }
    }

    public function show($user_id){
        Auth::user()->authorizePermission('user_view');
        $user = $this->getUser($user_id);
        $cardController = new CardController;
        $cards = $cardController->getListByUser($user_id);
        $userAccController = new UserAccController;
        $userAccs = $userAccController->getListByUser($user_id);
        $userRandomController = new UserRandomController;
        $userRandoms = $userRandomController->getListByUser($user_id);
        $wheelController = new WheelController;
        $wheels = $wheelController->getListByUser($user_id);
        $withdrawController = new WithdrawController;
        $withdraws = $withdrawController->getListByUser($user_id);

        return view('admin.user.show',[
            'user'=>$user, 'cards'=>$cards, 'userAccs'=>$userAccs,
            'userRandoms'=>$userRandoms, 'wheels'=>$wheels, 'withdraws'=>$withdraws
        ]);
    }

    public function edit($id){
        Auth::user()->authorizePermission('user_edit');
        $user = $this->getUser($id);
        return view('admin.user.edit',['user'=>$user]);
    }

    public function update(Request $request, $id){
        try{
            Auth::user()->authorizePermission('user_edit');
            $data = $request->all();
            User::where('id', $id)->update([
                'name' => $data['name'],
            ]);

            return response()->json([
                'err' => false,
                'msg' => 'Update Success'
            ]);
        }catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'err' => false,
                'msg' => 'Error Exception'
            ]);
        }
    }

    /**
     * Tìm kiếm user theo id, email và tên
     */
    public function search(Request $request)
    {
        try{
            Auth::user()->hasPermission('user_view');
            $search_content = $request->search_content;
            if($search_content == ""){
                $users = User::orderBy('id', 'desc')
                ->paginate(20);
            }else{
                $users = User::where('id','like',$search_content)
                ->orWhere('email','like',$search_content)
                ->orWhere('name','like','%' . $search_content . '%')
                ->orderBy('id', 'desc')
                ->paginate(20);
            }
            return view('admin.user.search',['users'=>$users]);
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json([
                'err' => true,
                'msg' => 'Error.'
            ]);
        }
    }

    public function handleUpdateCash(Request $request, $user_id){
        try{
            Auth::user()->hasPermission('user_edit');
            $data = $request->all();
            $dataValidate = $this->validateUpdateCash($data);
            if($dataValidate !== true){
                return response()->json([
                    'err' => true,
                    'msg' => $dataValidate,
                ]);
            }

            $user = $this->getUser($user_id);
            if($data['type'] == 1){
                $newCash = $user->cash + $data['amount'];
            }else{
                $newCash = $user->cash - $data['amount'];
            }
            $this->updateCash($user_id, $newCash);

            $data = array();
            $data['cash'] = number_format($newCash) . ' VNĐ';
            $data['msg'] = 'Success';

            return response()->json([
                'err' => false,
                'msg' => $data
            ]);
        }catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Exception.'
            ]);
        } 
    }   

    public function handleUpdateDiamond(Request $request, $user_id){
        try{
            Auth::user()->hasPermission('user_edit');
            $data = $request->all();
            $dataValidate = $this->validateUpdateDiamond($data);
            if($dataValidate !== true){
                return response()->json([
                    'err' => true,
                    'msg' => $dataValidate,
                ]);
            }

            $user = $this->getUser($user_id);
            if($data['type'] == 1){
                $newDiamond = $user->diamond + $data['amount'];
            }else{
                $newDiamond = $user->diamond - $data['amount'];
            }
            $this->updateDiamond($user_id, $newDiamond);

            $data = array();
            $data['diamond'] = number_format($newDiamond) . ' VNĐ';
            $data['msg'] = 'Success';

            return response()->json([
                'err' => false,
                'msg' => $data
            ]);
        }catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Exception.'
            ]);
        } 
    }   
}
