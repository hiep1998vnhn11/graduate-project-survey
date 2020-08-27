<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    const SERVICE = "facebook";

    public function redirectLogin()
    {
        return Socialite::driver(static::SERVICE)->redirect();
    }

    public function handleCallback() {
        try {
            $user = Socialite::driver(static::SERVICE)->user();
            dd($user);
            // check if user registered or not in the system
            $userDB = User::where('email', $user->getEmail())->first();

            // if not registered yet, create a new user record
            if (!$userDB) {
                $userDB = new User();
                if(!$user->getName()) $userDB->name = $user->getNickname();
                else $userDB->name = $user->getName();
                $userDB->email = $user->getEmail();
                // more info if you have any
                $userDB->save();
                // if db error
                // ok, it saved. login now
            }
            // login to the system now
            Auth::loginUsingId($userDB->id);

            // redirect back to homepage with success
            return redirect()
                    ->to('/home')
                    ->with('success', 'Login successfully!');

        } catch (\Exception $e) {
            return redirect()
                ->to('/login')
                ->with('error', 'Login via Github failed. Please try again.');
        }
    }
}
