<?php

namespace App\Livewire\Frontend;

use App\Models\Order;
use Livewire\Component;
use App\Models\OrderItem;   

class HistoryOrderUserComponent extends Component
{
 public $orderItems;

    public function mount(){
        $this->orderItems = OrderItem::with('order')->get(); 
    }
    public function render()
    {
        return view('livewire.frontend.history-order-user-component');
    }
}
