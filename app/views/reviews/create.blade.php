@extends('layouts.master')

@section('title', 'My New Review')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/form.css">
	<link rel="stylesheet" type="text/css" href="/css/create-review.css">
@stop

@section('content')
	<div class="container head">
	{{ Form::open(array('action' => 'ReviewsController@store')) }}
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
					<option value="{{{ $r->id }}}" @if(Input::old('roaster') == $r->id) selected @endif>
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
		<div class="col-12-xs col-md-12">
			<hr>
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
        $("#add_nav").text("Add Review");
		
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
						$options.append('<option @if(Input::old("coffee") == ' + index +') selected @endif value="' + index +'">' + value + '</option>');
					});
					coffee.trigger("change"); 
				});
			});
		};

		var route = "/categories/flavors/";
		var master = $("#category1");
		var dependent = $("#flavor1");
		var flavor = 'flavor1';
		getDropdown(master, dependent);

		master = $("#category2");
		dependent = $("#flavor2");
		flavor = 'flavor2';
		getDropdown(master, dependent);

		master = $("#category3");
		dependent = $("#flavor3");
		flavor = 'flavor3';
		getDropdown(master, dependent);

		function getDropdown(master, dependent) {
			master.change(function() {
				$.get(route + master.val()).done(function(data) {
					var $options = dependent;
					$options.empty();
					console.log(data);
					$.each(data, function(index, value) {
						$options.append('<option @if(Input::old(' + flavor + ') == ' + index +') selected @endif value="' + index +'">' + value + '</option>');
					});
					dependent.trigger("change"); 
				});
			});
		};
	});
	</script>
	<script src="/js/review-create-edit.js"></script>
@stop