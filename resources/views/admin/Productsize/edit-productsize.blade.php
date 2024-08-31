@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('productsize.edit-productsize-component',['id'=>$id])

   @endsection