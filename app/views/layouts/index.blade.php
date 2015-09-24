@extends('layouts.master')

@section('header')
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		        <div class="intro-text" id="forceUp">
		            <div class="intro-lead-in">@yield('heading')</div>
		            <div class="intro-heading">@yield('sub-heading')</div>
		            {{-- <a href="" class="page-scroll btn btn-xl">Tell Me More</a> --}}
		        </div>
	        </div>
	    </div>
    </div>
@stop