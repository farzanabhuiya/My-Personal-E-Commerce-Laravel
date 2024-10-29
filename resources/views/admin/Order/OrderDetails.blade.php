@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('order.orderdetails-component',['id'=>$id])

   @endsection