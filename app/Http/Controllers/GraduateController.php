<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\GraduateRequest;
use App\Graduate;
use App\User;

class GraduateController extends Controller
{
    public function create(GraduateRequest $request)
    {
        $user = Auth::user();
        if (!$user->isAnswer){
            return redirect('/');
        }
        $graduate = new Graduate();
        $graduate->Q1 = $request->Q1;
        $graduate->Q1 = $request->Q1;
        $graduate->Q1 = $request->Q1;
        $graduate->Q1 = $request->Q1;
        $graduate->Q1 = $request->Q1;
        $graduate->Q1 = $request->Q1;
        $graduate->Q1 = $request->Q1;
        $graduate->Q1 = $request->Q1;
        $user->isAnswer = true;

        $graduate->save();
        $userDB = User::where('id', $user->id)->first();
        $userDB->isAnswer = true;
        $userDB->save();
        return redirect('/');

    }
}
