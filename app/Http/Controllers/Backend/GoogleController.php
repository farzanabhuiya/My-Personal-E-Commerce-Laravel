<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
     public function googleLogin(){
        return Socialite::driver('google')->redirect();
     }


     public function googleRedirect(){
        $user = Socialite::driver('google')->user();
        //dd($user);
        if($user){
            $authuser = User::updateOrCreate([
                //chcek
                'email' =>$user->email
            ],[
                'name' => $user->name,
                'email' =>$user->email,
                'password' =>Hash::make(uniqid()),
            ]);
            Auth::login($authuser);
            return redirect()->route('frontend.contant.homepage');
        }
     }
}

