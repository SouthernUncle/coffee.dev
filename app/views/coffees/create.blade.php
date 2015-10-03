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
		<div class="col-xs-12">
			<h1 class="brown heading">Create New Coffee</h1>
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
	</div>

	<div class="container">

		<div class="col-xs-12 col-s-6">
			<span class="brown fancy">Name</span>
	    		<input type="text" name="name" class="form-control coffee-input brown" placeholder="i.e. 'La Simetria'"/>
		</div>
		<div class="col-xs-12 col-s-6">
			<span class="brown fancy">Process</span>
    		<input type="text" name="process" id="process" class="form-control coffee-input" placeholder="i.e. 'Washed' or 'Natural'"/>
	    </div>
	    <div class="col-xs-12 col-s-6">
			<span class="brown fancy">Elevation</span>
    		<input type="text" name="elevation" id="elevation" class="form-control coffee-input" placeholder="i.e. '1800m'"/>
	    </div>
		<div class="col-xs-12">
			<span class="brown fancy">Description</span>
	    	<textarea name="description" rows="5" class="form-control" placeholder="Enter the roaster's description of this coffee."></textarea>
    	</div>
	    <div class="upload col-xs-12 col-md-6">
		    {{ Form::label('file','Image Upload',array('id'=>'','class'=>'fancy brown')) }}
			{{ Form::file('file','',array('id'=>'','class'=>'brown img-upload')) }}
		</div>
	</div>
	<button class="btn btn-default fancy">Save</button>
	{{ Form::close() }}
@stop