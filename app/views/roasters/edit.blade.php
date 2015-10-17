@extends('layouts.master')

@section('title')
	Edit {{{ $roaster->name }}}
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/form.css">
	<link rel="stylesheet" type="text/css" href="/css/create-review.css">
	<link rel="stylesheet" type="text/css" href="/css/create-coffee.css">
@stop

@section('content')
	{{ Form::model($roaster, array('action' => array('RoastersController@update', $roaster->id), 'method' =>'PUT', 'files' => true)) }}
	<div class="container head">
		<div class="col-xs-12">
			<h1 class="brown heading">{{{ $roaster->name }}}</h1>
		</div>	
	<div class="container">

		<div class="col-xs-6 col-md-6">
			<span class="brown fancy">Name</span>
	    		<input type="text" name="name" class="form-control coffee-input brown" placeholder="i.e. 'Merit Roasting Co.'" value="{{{ $roaster->name }}}"/>
		</div>
		<div class="col-xs-6 col-md-6">
			<span class="brown fancy">Address</span>
    		<input type="text" name="address" id="address" class="form-control coffee-input" placeholder="i.e. '2001 S. Presa Street'" value="{{{ $roaster->address }}}"/>
	    </div>
	    <div class="col-xs-9 col-md-6">
			<span class="brown fancy">City</span>
    		<input type="text" name="city" id="city" class="form-control coffee-input" placeholder="i.e. 'San Antonio'" value="{{{ $roaster->city }}}"/>
	    </div>
		<div class="col-xs-3 col-md-6">
			<span class="brown fancy">State</span>
	    	<input type="text" name="state" id="state" class="form-control coffee-input" placeholder="i.e. 'TX'" value="{{{ $roaster->state }}}"/>
    	</div>
    	<div class="col-xs-6 col-s-6">
			<span class="brown fancy">Website</span>
    		<input type="url" name="url" id="url" class="form-control coffee-input" placeholder="i.e. 'http://meritcoffee.com'" value="{{{ $roaster->url }}}"/>
	    </div>
	    <div class="col-xs-6 col-s-6">
			<span class="brown fancy">Twitter Handle</span>
    		<input type="url" name="twitter" id="twitter" class="form-control coffee-input" placeholder="i.e. 'http://twitter.com/localcoffeeSA'" value="{{{ $roaster->twitter }}}"/>
	    </div>
	    <div class="col-xs-6 col-s-6">
			<span class="brown fancy">Facebook Extension</span>
    		<input type="url" name="facebook" id="facebook" class="form-control coffee-input" placeholder="i.e. 'http://facebook.com/localcoffeesa'" value="{{{ $roaster->facebook }}}"/>
	    </div>
	    <div class="col-xs-6 col-s-6">
			<span class="brown fancy">Instagram Name</span>
    		<input type="url" name="instagram" id="instagram" class="form-control coffee-input" placeholder="i.e. 'http://instagram.com/meritroastingco'" value="{{{ $roaster->instagram }}}"/>
	    </div>
	    <div class="upload col-xs-12 col-md-6">
		    {{ Form::label('file','Image Upload',array('id'=>'','class'=>'fancy brown')) }}
			{{ Form::file('file','',array('id'=>'','class'=>'brown img-upload')) }}
		</div>
		<div class="col-xs-12">
			<span class="brown fancy">Description</span>
	    	<textarea name="description" rows="5" class="form-control" placeholder="Enter a description of the roaster.">{{{ $roaster->description }}}</textarea>
    	</div>
	</div><br>
	<button class="btn btn-default fancy">Save</button>
	{{ Form::close() }}
@stop

@section('js')
	<script>
		$("#create_nav").addClass("active");
		$("#add_nav").text("Edit Roaster");
	</script>
@stop