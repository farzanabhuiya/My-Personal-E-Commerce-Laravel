<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(){
        return view('frontend.contant.UserProfile');
    }

    public function editUserProfile(Request $request){
        return view('frontend.contant.EditUserProfile');
    }

    public function PasswordUpdate(Request $request){
        return view('frontend.contant.PasswordUserProfileUpdate');
    }
}
