@extends('layouts.master')

@section('title')
	My {{ $review->coffee->name }} Review
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/form.css">
@stop

@section('content')
	<section>
		<div class="container">
			<div class ="well titles">
				<h1 class="yellow">{{ $review->coffee->name }}</h1>
				<span class="fancy yellow small"> - by - </span>
				<h2 class="fancy yellow">{{ $review->coffee->roaster->name }}</h2>
			</div>
		{{ Form::model($review, array('action' =>array('ReviewsController@update', $review->id), 'method' =>'PUT')) }}
			<div class="well full col-xs-12">
				<span class="slider-title fancy">Flavor</span>
				<input id="flavor" name="flavor" data-slider-id='flavor' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->flavor }}}"/>
			</div>
			<div class="well col-xs-12 col-s-6">
				<span class="slider-title fancy">Aroma</span>
				<input id="aroma" name="aroma" data-slider-id='aroma' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->aroma }}}"/>
			</div>
			<div class="well col-xs-12 col-s-6">
				<span class="slider-title fancy">Aftertaste</span>
				<input id="aftertaste" name="aftertaste" data-slider-id='aftertaste' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->aftertaste }}}"/>
			</div>
			<div class="well col-xs-12 col-s-6">
				<span class="slider-title fancy">Balance</span>
				<input id="balance" name="balance" data-slider-id='balance' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->balance }}}"/>
			</div>
			<div class="well col-xs-12 col-s-6">
				<span class="slider-title fancy">Roast</span>
				<input id="roast" name="roast" data-slider-id='roast' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->roast }}}"/>
			</div>
			<div class="well col-xs-12 col-s-6">
				<span class="slider-title fancy">Body</span>
				<input id="body" name="body" data-slider-id='body' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->body }}}"/>
			</div>
			<div class="well col-xs-12 col-s-6">
				<span class="slider-title fancy">Acidity</span>
				<input id="acidity" name="acidity" data-slider-id='aroma' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->acidity }}}"/>
			</div>
			<div class="well col-xs-12 col-s-6">
        		<span class="slider-title fancy">Price per Bag</span>
   				<div class="input-group"> 
	        		<span class="input-group-addon">$</span>
	        		<input type="number" name="price" value="{{ $review->price }}" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency"/>
    			</div>
	        </div>
	        <div class="well col-xs-12 col-s-6">
        		<span class="slider-title fancy">Bag Size</span>
        		<div class="input-group">
	        		<input type="number" value="{{ Review::convertToOunces($review->bag_size_grams) }}" min="0" step="0.1" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" name="bag_size_grams"/>
	        		<span class="input-group-addon" id="basic-addon2">oz.</span>
        		</div>
	        </div>
	        <div class="well col-xs-12 col-s-6 full">
	        	<span class="slider-title fancy">Review</span>
	        	<textarea class="input-group form-control clear" name="review" cols="50" rows="10">{{ $review->review }}</textarea>
	        </div>

	        <div class="well col-xs-12 col-s-6 full">
		        <span class="slider-title fancy clear-both">Choose 3 Notes</span>

		        <select class="form-control flavors tier-one" id="category1">
					<option>Categories:</option>
					@foreach ($categories as $cat)
						<option value="{{{ $cat->id }}}">
							{{{ (ucfirst($cat->name)) }}}
						</option>
					@endforeach
				</select>

				<select class="form-control flavors tier-two" id="flavor1" name="flavor1">
					<option>Please select a Category first...</option>
				</select>
				
				<select class="form-control flavors tier-one" id="category2">
					<option>Categories:</option>
					@foreach ($categories as $cat)
						<option value="{{{ $cat->id }}}">
							{{{ (ucfirst($cat->name)) }}}
						</option>
					@endforeach
				</select>

				<select class="form-control flavors tier-two" id="flavor2" name="flavor2">
					<option>Please select a Category first...</option>
				</select>

				<select class="form-control flavors tier-one" id="category3">
					<option>Categories:</option>
					@foreach ($categories as $cat)
						<option value="{{{ $cat->id }}}">
							{{{ (ucfirst($cat->name)) }}}
						</option>
					@endforeach
				</select>

				<select class="form-control flavors tier-two" id="flavor3" name="flavor3">
					<option>Please select a Category first...</option>
				</select>
	        </div>

        <button class="btn btn-default fancy">Save</button>

		{{ Form::close() }}
		</div>
	</section>
@stop

@section('js')
	<script>
	$(document).ready(function() {
	"use strict";
		var route = "/categories/flavors/";

		var master = $("#category1");
		var dependent = $("#flavor1");
		getDropdown(master, dependent);

		master = $("#category2");
		dependent = $("#flavor2");
		getDropdown(master, dependent);

		master = $("#category3");
		dependent = $("#flavor3");
		getDropdown(master, dependent);

		function getDropdown(master, dependent) {
			master.change(function() {
				$.get(route + master.val()).done(function(data) {
					var $options = dependent;
					$options.empty();
					console.log(data);
					$.each(data, function(index, value) {
						$options.append('<option value="' + index +'">' + value + '</option>');
					});
					dependent.trigger("change"); 
				});
			});
		};

		// With JQuery
		$('#aroma').slider({
			formatter: function(value) {
				return 'Aroma: ' + value;
			}
		});

		$('#flavor').slider({
			formatter: function(value) {
				return 'Flavor: ' + value;
			}
		});

		$('#aftertaste').slider({
			formatter: function(value) {
				return 'Aftertaste: ' + value;
			}
		});

		$('#balance').slider({
			formatter: function(value) {
				return 'Balance: ' + value;
			}
		});

		$('#roast').slider({
			formatter: function(value) {
				return 'Roast: ' + value;
			}
		});

		$('#body').slider({
			formatter: function(value) {
				return 'Body: ' + value;
			}
		});

		$('#acidity').slider({
			formatter: function(value) {
				return 'Acidity: ' + value;
			}
		});
	});

  </script>
@stop