@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('Subcategorie.edit-subcategory-component',['id'=>$id])

   @endsection