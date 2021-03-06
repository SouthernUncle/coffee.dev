@extends('layouts.master')

@section('title')
	My {{{ $coffee->name }}} Review
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/form.css">
	<link rel="stylesheet" type="text/css" href="/css/create-review.css">
@stop

@section('content')
	<div class="container head">
	{{ Form::open(array('action' => 'ReviewsController@store')) }}
		<div class="full col-xs-12 col-md-12">
			<div class="col-xs-12 col-md-6">
			<h4 class="brown fancy">Select Roaster</h4>
				<select class="form-control" name="roaster" id="roaster">
					<option value="{{{ $roaster[0]->id }}}">{{{ $roaster[0]->name }}}</option>
				</select>
			</div>
			<div class="col-xs-12 col-md-6">
			<h4 class="brown fancy">Select Coffee</h4>
				<select class="form-control" id="coffee" name="coffee">
					<option value="{{{ $coffee->id }}}">{{{ $coffee->name }}}</option>
				</select>
			</div>
		</div>
	</div>
	@include('reviews.create-form')
	{{ Form::close() }}
@stop

@section('js')
	<script>
	$(document).ready(function() {
	"use strict";
		$("#create_nav").addClass("active");
		$("#add_nav").text("Add Review");

		$("#roaster").change(function() {
			$.get("/roasters/coffees/" + $("#roaster").val()).done(function(data) {
				var $coffees = $("#coffee");
				$coffees.empty();
				$.each(data, function(index, value) {
					$coffees.append('<option value="' + index +'">' + value + '</option>');
				});
				$("#coffee").trigger("change"); 
			});
		});

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
	});
	</script>
	<script src="/js/review-create-edit.js"></script>
@stop