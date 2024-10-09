

@extends('frontend.frontend_layout.forntend_layout')
@section('content')
    
 @livewire('frontend.brandall-component',['slug'=>$slug]) 
@endsection