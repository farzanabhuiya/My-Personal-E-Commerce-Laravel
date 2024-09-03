@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('shipping.edit-shipping-component',['id'=>$id])

   @endsection