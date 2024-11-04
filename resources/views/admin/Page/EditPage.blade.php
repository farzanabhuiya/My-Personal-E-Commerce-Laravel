@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('page.edit-page-component',['id'=>$id])



   @endsection