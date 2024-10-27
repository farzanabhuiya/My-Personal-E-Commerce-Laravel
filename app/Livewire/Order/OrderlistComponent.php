<?php

namespace App\Livewire\Order;

use App\Models\User;
use App\Models\Order;
use Livewire\Component;

class OrderlistComponent extends Component
{

      
     public $search='';
  
    public function render()
    {
        // Retrieve paginated orders with related user data
        $orders = Order::with('user')
            ->whereHas('user', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->paginate(10); // Set the desired pagination number here

        return view('livewire.order.orderlist-component', [
            'orders' => $orders,
        ]);
    }
}
