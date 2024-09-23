@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('brand.create-brand-component',['categories' => $Categorie])

   @endsection