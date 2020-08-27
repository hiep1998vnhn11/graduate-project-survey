<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user(); 
        //Check social get email
        if($getInfo->getEmail()){
            $findUser = User::where('email', $getInfo->email)->first();
            if($findUser){
                Auth::login($findUser); 
                return redirect()->to('/home');
            } else {
                $user = new User();

                $user->email = $getInfo->getEmail();
            
                if(!$getInfo->getName()) $user->name = $getInfo->getNickname();
                else $user->name = $getInfo->getName();

                $user->provider_id = $getInfo->getId();
                $user->provider = $provider;

                $user->save();

                Auth::login($user); 
                return redirect()->to('/home');
            }
        } else {

            $user = User::where('provider_id', $getInfo->id)
                ->where('provider', $provider)
                ->first();
            if (!$user) {
                $user = new User();
                if(!$getInfo->getName()) $user->name = $getInfo->getNickname();
                else $user->name = $getInfo->getName();

                $user->provider_id = $getInfo->getId();
                $user->provider = $provider;

                $user->save();
            }
            
            Auth::login($user); 
            return redirect()->to('/home');
        }
    }
}
