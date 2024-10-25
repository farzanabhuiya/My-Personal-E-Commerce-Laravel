<?php

namespace App\Livewire\Frontend;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class EdituserprofileCompenet extends Component
{
 use WithFileUploads;
   public $name;
   public $email;
   public $profile_img;
  // public $id;


    public function mount(){
        $users = User::find(Auth::id());
        // $this->id= $users->id;
        $this->name= $users->name;
        $this->email= $users->email;
        $this->profile_img= $users->profile_img;

        
    }

    public function updateProfile(){
        $this->validate([
            'name' =>'required|max:20',
            'email' =>'required|email|',
     
           'profile_img' =>'nullable|mimes:jpg,png'
          ],[
            'name.required' => "Enter your user name"
          ]);

          
         $fileName = time().'.'.$this->profile_img->extension(); 
         $this->profile_img->storeAs('userprofile',$fileName,'public');

       
          $users = User::find(Auth::id());
          $users->name = $this->name;
          $users->email = $this->email;
          $users->profile_img = $fileName;
          $users->save();
          $this->reset();
          return back()->with('success','Update UserProfile Successfull');
         
          }

    
    public function render()
    {
        return view('livewire.frontend.edituserprofile-compenet');
    }
}
