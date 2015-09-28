
@extends('layouts.master')

@section('title', 'REGIONS')

@section('content')
	<section>
		<div class="container">
			<h1 id="regions-header">Regions</h1>
			<div class="region-photos">
				@foreach($regions as $r)
					<span class="col-xs-12 col-sm-6 col-lg-4">
						<a href="{{{ action('RegionsController@show', $r->id) }}}">
							<img src="{{ $r->img_url }}" class="img-responsive region-pic">
							<p class="region-name">{{ $r->name }}</p>
						</a>
					</span>
				@endforeach
			</div>
		</div>
	</section>
@stop

@section('js')
	<script>
		$(document).ready(function() {
			"use strict";	

			doHoverAnimation(".region-pic", "pulse");

			function doHoverAnimation (element, animation) {
				var element = $(element);
				element.hover(function() {
					$(this).addClass('animated ' + animation).one('animationend webkitAnimationEnd oAnimationEnd', function() {
    					$(this).removeClass('animated ' + animation);
    				});
				});
			};	
		});
	</script>
@stop