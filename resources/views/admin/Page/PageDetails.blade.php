@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('page.pagedetails-component',['id'=>$id])



   @endsection