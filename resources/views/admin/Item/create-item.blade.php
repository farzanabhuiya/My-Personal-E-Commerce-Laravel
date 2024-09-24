@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('item.create-item-component',['Categorie'=>$Categorie,'SubCategorie'=>$SubCategorie,'Brand'=>$Brand])

   @endsection