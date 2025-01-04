<?php

namespace App\Livewire\Dashboard;

use App\Models\OrderItem;
use App\Models\User;
use Livewire\Component;

class DashboradComponent extends Component
{

    public $userCount;
    public $OrderCount;

    function mount(){
        $this->userCount=User::count();
        $this->OrderCount = OrderItem::count();

    }



    public function render()
    {
        return view('livewire.dashboard.dashborad-component');
    }
}
