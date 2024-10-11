<?php

namespace App\Livewire\Frontend;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class UserprofileCompenet extends Component
{
  
    use WithFileUploads;



    public function render()
    {
        return view('livewire.frontend.userprofile-compenet');
    }
}
