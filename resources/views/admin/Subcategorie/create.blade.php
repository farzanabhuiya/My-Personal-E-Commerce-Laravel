@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

{{-- @livewire('Subcategorie.create-component',['categorie'=>$categories]) --}}
@livewire('Subcategorie.create-component',['categories' => $categories])

   @endsection 