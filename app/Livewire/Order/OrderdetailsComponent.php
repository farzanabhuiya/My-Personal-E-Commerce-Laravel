<?php

namespace App\Livewire\Order;

use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;

class OrderdetailsComponent extends Component
{

    public $order;
    public $id;
    public $orderItems;
    public function mount($id){
        $this->order =Order::with('customerAddress')->where('id',$id)->first(); 
        $this->orderItems =OrderItem::where('order_id',$id)->get();

        
    }

    public function render()
    {
        return view('livewire.order.orderdetails-component', [
            'order' => $this->order,
            'orderItems' => $this->orderItems,
        ]);
    }
}
