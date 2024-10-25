<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
     public function showProfile(){
      // dd(auth()->user()->name);
        return view('admin.profile');
     }


     public function updateProfile(Request $request){
             $request->validate([
            'name' =>'required|max:20',
            'email' =>'required|email|unique:users,email,'. Auth::id(),
    
           'profile_img' =>'nullable|mimes:jpg,png'
          ],[
            'name.required' => "Enter your user name"
          ]);
    
           //data update
          if($request->hasFile('profile_img')){
           $ext = $request->profile_img->extension();
           $image = auth()->user()->name.'-' . Carbon::now()->format('d-m-y-h-m-s'). '.'.$ext;
           $request->profile_img->storeAS('users', $image,'public');
            
          }
    
          
              $user = User::find(Auth::id());
              $user->name =$request->name;
              $user->email =$request->email;
              $user->profile_img =$image??null;
              $user->save();
              return back();
     }



     function updatepassword(Request $request){
        $request->validate([
          'old' =>"required|current_password",
          'password' =>"required|confirmed|different:old",
          'password_confirmation' =>"required",
        ]);
       
     $user = User::find(Auth::id());
    $user->password = Hash::make($request->password);
    $user->save();
    return back();
        
}
}
