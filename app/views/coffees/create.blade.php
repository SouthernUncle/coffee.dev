@extends('layouts.master')

@section('title', 'My New Coffee')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/form.css">
	<link rel="stylesheet" type="text/css" href="/css/create-review.css">
	<link rel="stylesheet" type="text/css" href="/css/create-coffee.css">
@stop

@section('content')
	{{ Form::open(array('action' => 'CoffeesController@store', 'files' => true)) }}
	<div class="container head">
		<div class="col-xs-12 col-md-6">
		<h4 class="brown fancy">Select Region:</h4>
			<select class="brown form-control" name="region" id="region">
					<option value="0">Region:</option>
				@foreach ($regions as $re)
					<option value="{{{ $re->id }}}">
						{{{ $re->name }}}
					</option>
				@endforeach
			</select>
		</div>
		<div class="col-xs-12 col-md-6">
		<h4 class="brown fancy">Select Roaster</h4>
			<select class="brown form-control" name="roaster" id="roaster">
					<option value="0">Roaster:</option>
				@foreach ($roasters as $r)
					<option value="{{{ $r->id }}}">
						{{{ $r->name }}} - {{{ $r->city }}}, {{{ $r->state }}}
					</option>
				@endforeach
			</select>
		</div>	
	</div>

	<div class="container">
		@include('coffees.coffee-create-form')
	</div>
	<button class="btn btn-default fancy">Save</button>
	{{ Form::close() }}
@stop

@section('js')
<script>
    "use strict";
    $(document).ready(function() {
        $("#create_nav").addClass("active");
		$("#add_nav").text("Add Coffee");
    });
</script>
@stop