@extends('backend.layouts.app')
<!-- Title -->
@section('title', $head)

<!-- Header -->
@section('header')
@parent
@endsection

<!-- Side Navigation -->
@section('side_navigation')
@parent
@endsection

<!-- Content -->
@section('content')	
   <div class="page">
   		<h2>{{$page_heading}}</h2>
   </div>    
@endsection

@section('footer')
@parent
@endsection

@section('page_script')
dadsad
@endsection