@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('brand.edit-brand-component',['id'=>$id])

   @endsection