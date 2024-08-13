@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('item.edit-item-component',['id'=>$id])

   @endsection