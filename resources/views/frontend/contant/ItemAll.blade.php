@extends('frontend.frontend_layout.forntend_layout')
@section('content')
    
 @livewire('frontend.itemall-component',['slug'=>$slug]) 
@endsection