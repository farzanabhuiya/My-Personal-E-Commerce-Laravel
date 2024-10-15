<?php

namespace App\Http\Controllers\Helpers;
//use Illuminate\Support\Facades\Mail;

use App\Models\Order;
//use Illuminate\Support\Facades\Mail;

trait helper {


   function orderEmail($orderId){

    $order = Order::where('id',$orderId)->with('OrderItem')->first();

   $mailData =[
    'subject' =>'thanks you order',
    'order'  =>$order
   ];

 // dd($order);
    // Mail::to($order->emails)->send(new OrderEmail($mailData));
    Mail::to($order->email)->send(new OrderEmail($mailData));

 }

}

?>
