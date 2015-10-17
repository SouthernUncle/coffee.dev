
@extends('layouts.master')

@section('title', 'REGIONS')

@section('content')
	<div class="container">
		<div class="region-photos">
			@foreach($regions as $r)
				<span class="col-xs-12 col-sm-6 col-lg-4 animate-hover">
					<a href="{{{ action('RegionsController@show', $r->url_name) }}}">
						<img src="{{ $r->img_url }}" class="img-responsive region-pic">
						<p class="region-name">{{ $r->name }}</p>
					</a>
				</span>
			@endforeach
		</div>
	</div>
@stop

@section('js')
<script>
"use strict";	
	$(document).ready(function() {

		doHoverAnimation(".animate-hover", "pulse");

		function doHoverAnimation (element, animation) {
			var element = $(element);
			element.mouseenter(function() {
				$(this).addClass('animated ' + animation).one('animationend webkitAnimationEnd oAnimationEnd', function() {
					$(this).removeClass('animated ' + animation);
				});
			});
		};	
    $("#region_nav").addClass("active");
	});
</script>
@stop