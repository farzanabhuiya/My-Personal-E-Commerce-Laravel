<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class PasswordupdateCompenet extends Component
{   public $old;
   public $password;
   public $confirmPassword;

    public function PasswordUpdate()
    {
        // Validate the form input
        $this->validate([
        
          'old' =>"required|current_password",
          'password' =>"required|confirmed|different:old",
          'confirmPassword' =>"required",
        ]);
        $user = User::find(auth()->user()->id);
        $user->password = Hash::make($this->password);
        $user->save();
        return back()->with('success','PassWordUpdate UserProfile Successfull');
            
    
    
    }



    public function render()
    {
        return view('livewire.frontend.passwordupdate-compenet');
    }
}