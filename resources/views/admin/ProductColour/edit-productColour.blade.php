@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('productcolour.edit-productcolour-component',['id'=>$id])

   @endsection