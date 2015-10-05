@extends('layouts.master')

@section('title')
	My New Review
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/form.css">
	<link rel="stylesheet" type="text/css" href="/css/create-review.css">
@stop

@section('content')
	<div class="container head">
	{{ Form::open(array('action' => 'ReviewsController@store')) }}
		<div class="col-xs-12 col-md-12 center-it">
			<h1 class="brown heading">New Review</h1>
		</div>

		<div class="col-xs-12 col-md-6 center-it">
			<h4 class="brown fancy">Don't see what you're looking for?</h4>
			<a href="{{{ action('RoastersController@create') }}}">
				<button type="button" class="btn btn-info btn-lg">Add a New Roaster</button>
			</a>
			<a href="{{{ action('CoffeesController@create') }}}">
				<button type="button" class="btn btn-info btn-lg">Add a New Coffee</button>
			</a>
		</div>

		<div class="col-xs-12 col-md-6 center-it">
			<h4 class="brown fancy">Select Roaster</h4>

			<select class="form-control" name="roaster" id="coffee_roaster">
					<option value="0">Roaster:</option>
				@foreach ($roasters as $r)
					<option value="{{{ $r->id }}}">
						{{{ $r->name }}} - {{{ $r->city }}}, {{{ $r->state }}}
					</option>
				@endforeach
			</select>
		</div>

		<div class="col-xs-12 col-md-6 center-it">
			<h4 class="brown fancy">Select Coffee</h4>

			<select class="form-control" id="roasters_coffees" name="coffee">
				<option value="0">Please select a roaster first...</option>
			</select>
		</div>
	</div>
	@include('reviews.create-form')
	{{ Form::close() }}
@stop

@section('js')
	<script>
	$(document).ready(function(){
	"use strict";

        $("#create_nav").addClass("active");
		
		var path = "/roasters/coffees/";
		var roaster = $("#coffee_roaster");
		var coffee = $("#roasters_coffees");
		getCoffeeDropdown(roaster, coffee);

		function getCoffeeDropdown(roaster, coffee) {
			roaster.change(function() {
				$.get(path + roaster.val()).done(function(data) {
					var $options = coffee;
					$options.empty();
					console.log(data);
					$.each(data, function(index, value) {
						$options.append('<option value="' + index +'">' + value + '</option>');
					});
					coffee.trigger("change"); 
				});
			});
		};

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
				switch (value) {
					case 0:
						return 'Roast: ' + value + ' (Sour Peanuts)';
						break;
					case 2:
						return 'Roast: ' + value + ' (Hay)';
						break;
					case 3:
						return 'Roast: ' + value + ' (Grassy)';
						break;
					case 5:
						return 'Roast: ' + value + ' (Balanced)';
						break;
					case 7:
						return 'Roast: ' + value + ' (Toasty)';
						break;
					case 8:
						return 'Roast: ' + value + ' (Roasty)';
						break;
					case 9:
						return 'Roast: ' + value + ' (Burnt)';
						break;
					case 10:
						return 'Roast: ' + value + ' (Tire Fire)';
						break;
					
				}
				return 'Roast: ' + value;
			}
		});

		$('#body').slider({
			formatter: function(value) {
				switch (value) {
					case 0:
						return 'Body: ' + value + ' (Watery)';
						break;
					case 1:
						return 'Body: ' + value + ' (Tea-like)';
						break;
					case 2:
						return 'Body: ' + value + ' (Silky)';
						break;
					case 3:
						return 'Body: ' + value + ' (Smooth)';
						break;
					case 4:
						return 'Body: ' + value + ' (2% Milk)';
						break;
					case 5:
						return 'Body: ' + value + ' (Balanced)';
						break;
					case 6:
						return 'Body: ' + value + ' (Syrupy)';
						break;
					case 7:
						return 'Body: ' + value + ' (Velvety)';
						break;
					case 8:
						return 'Body: ' + value + ' (Chewy)';
						break;
					case 9:
						return 'Body: ' + value + ' (Coating)';
						break;
					case 10:
						return 'Body: ' + value + ' (Viscous)';
						break;
				}
				return 'Body: ' + value;
			}
		});

		$('#acidity').slider({
			formatter: function(value) {
				switch (value) {
					case 0:
						return 'Acidity: ' + value + ' (No Acid)';
						break;
					case 1:
						return 'Acidity: ' + value + ' ()';
						break;
					case 2:
						return 'Acidity: ' + value + ' ()';
						break;
					case 3:
						return 'Acidity: ' + value + ' ()';
						break;
					case 4:
						return 'Acidity: ' + value + ' ()';
						break;
					case 5:
						return 'Acidity: ' + value + ' ()';
						break;
					case 6:
						return 'Acidity: ' + value + ' ()';
						break;
					case 7:
						return 'Acidity: ' + value + ' ()';
						break;
					case 8:
						return 'Acidity: ' + value + ' ()';
						break;
					case 9:
						return 'Acidity: ' + value + ' ()';
						break;
					case 10:
						return 'Acidity: ' + value + ' ()';
						break;
				}
				return 'Acidity: ' + value;
			}
		});

		// webshims.setOptions('forms-ext', {
		//     replaceUI: 'auto',
		//     types: 'number'
		// });
		// webshims.polyfill('forms forms-ext');

	});
	</script>
@stop