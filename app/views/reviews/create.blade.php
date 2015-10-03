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
		<div class="well col-xs-12 col-md-8">
			<h1 class="yellow heading">Create New Review</h1>

			<div class="col-xs-12 col-md-6">
				<h4 class="yellow fancy">Select Roaster</h4>

				<select class="form-control" name="roaster" id="coffee_roaster">
						<option>Roaster:</option>
					@foreach ($roasters as $r)
						<option value="{{{ $r->id }}}">
							{{{ $r->name }}} - {{{ $r->city }}}, {{{ $r->state }}}
						</option>
					@endforeach
				</select>

			</div>

			<div class="col-xs-12 col-md-6">
				<h4 class="yellow fancy">Select Coffee</h4>

				<select class="form-control" id="roasters_coffees" name="coffee">
					<option>Please select a roaster first...</option>
				</select>

			</div>
		</div>
		<div class="well col-xs-12 col-md-4">
			<h4 class="yellow fancy">Don't see what you're looking for?</h4>
			<a href="{{{ action('RoastersController@create') }}}">
				<button type="button" class="btn btn-info btn-lg">Add a New Roaster</button>
			</a>
			<h4 class="yellow fancy">or</h4>
			<a href="{{{ action('CoffeesController@create') }}}">
				<button type="button" class="btn btn-info btn-lg">Add a New Coffee</button>
			</a>
		</div>
	</div>
	@include('reviews.create-form')
	{{ Form::close() }}
@stop

@section('js')
	<script>
	$(document).ready(function(){
	"use strict";
		
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

		// webshims.setOptions('forms-ext', {
		//     replaceUI: 'auto',
		//     types: 'number'
		// });
		// webshims.polyfill('forms forms-ext');

	});
	</script>
@stop