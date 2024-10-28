<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Livewire\Component;

class DashboradComponent extends Component
{

    public $userCount;

    function mount(){
        $this->userCount=User::count();
    }



    public function render()
    {
        return view('livewire.dashboard.dashborad-component');
    }
}
