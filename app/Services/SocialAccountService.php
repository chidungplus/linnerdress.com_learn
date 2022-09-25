<?php 

namespace App\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\SocialAccount;
use App\User;
use Illuminate\Support\Facades\Hash;

class SocialAccountService
{
    public static function createOrGetUser(ProviderUser $providerUser, $social)
    {
        $account = SocialAccount::whereProvider($social)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            

            $fbEmail = $providerUser->getEmail();

            $email = $providerUser->getId() . "@facebook.com";

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $social
            ]);
            $user = User::whereEmail($email)->first();

            if (!$user) {



                $user = User::create([
                    'email' => $email,
                    'facebook_email' => $fbEmail,
                    'name' => $providerUser->getName(),
                    'password' => Hash::make($providerUser->getId()),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
    /**
     * lấy data user từ db, nếu không có dữ liệu thì return false
     */
    public static function getUser(ProviderUser $providerUser, $social)
    {
        $account = SocialAccount::whereProvider($social)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            return null;
        }
    }
}