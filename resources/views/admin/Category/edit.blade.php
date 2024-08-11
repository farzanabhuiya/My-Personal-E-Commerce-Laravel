@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('categorie.edit',['id'=>$id])
   @endsection