<?php

namespace App\Livewire\Frontend;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class UserprofileCompenet extends Component
{
  
    //use WithFileUploads;

  

    public  $userProfile;
    public function mount(){
        $this->userProfile=auth()->user();
    }




    public function render()
    {
        //dd($this->userProfile);
        return view('livewire.frontend.userprofile-compenet');
    }
}
