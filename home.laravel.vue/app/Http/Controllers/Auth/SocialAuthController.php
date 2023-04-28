<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Services\SocialAccountService;
use Illuminate\Support\Facades\Log;
use Socialite;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback($social)
    {
        $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->stateless()->user(), $social);
        $user->setRememberToken(Str::random(60));
        $user->save();
        auth()->login($user);

        return redirect()->to('/');
    }
    public function deleteDataUser($social)
    {
        //$user = SocialAccountService::getUser(Socialite::driver($social)->stateless()->user(), $social);
        
        return 'Dữ liệu của bạn đã được xóa trên hệ thống của chúng tôi!';
    }
}