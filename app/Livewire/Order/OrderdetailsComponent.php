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
    public $status;
    public $shipped_date;

    public function mount($id){
        $this->order = Order::with('customerAddress')->find($id);
        // ey vabe o kora jai
        //$this->order =Order::with('customerAddress')->where('id',$id)->first(); 
        $this->orderItems =OrderItem::where('order_id',$id)->get();

        // Initialize status and shipped_date properties
        $this->status = $this->order->status;
        $this->shipped_date = $this->order->shipped_date;
        
    }

    public function updateOrder()
    {
        $order = Order::find($this->id);
        $order->status = $this->status;
        $order->shipped_date = $this->shipped_date;
        $order->save();

        // Flash a success message
        session()->flash('message', 'Order updated successfully.');
    }

    public function render()
    {
        return view('livewire.order.orderdetails-component', [
            'order' => $this->order,
            'orderItems' => $this->orderItems,
        ]);
    }
}
