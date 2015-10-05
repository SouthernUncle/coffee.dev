@extends('layouts.master')

@section('title')
	Edit {{{ $region->name }}}
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/form.css">
	<link rel="stylesheet" type="text/css" href="/css/create-review.css">
	<link rel="stylesheet" type="text/css" href="/css/create-coffee.css">
@stop

@section('content')
	{{ Form::model($region, array('action' => array('RegionsController@update', $region->id), 'method' =>'PUT', 'files' => true)) }}
		<div class="container">
			<div class="col-xs-12 col-s-6">
				<span class="brown fancy">Name</span>
		    		<input type="text" name="name" class="form-control coffee-input brown" placeholder="i.e. 'Ethiopia'" value="{{{ $region->name }}}"/>
			</div>
			<div class="col-xs-12">
				<span class="brown fancy">Description</span>
		    	<textarea name="description" rows="5" class="form-control brown" placeholder="Enter a description of the region.">{{{ $region->description }}}</textarea>
	    	</div>
		    <div class="upload col-xs-12 col-md-6">
			    {{ Form::label('file','Map Image Upload',array('id'=>'','class'=>'fancy brown')) }}
				{{ Form::file('map','',array('id'=>'','class'=>'brown img-upload')) }}
			</div>
			<div class="upload col-xs-12 col-md-6">
			    {{ Form::label('file','Image Upload',array('id'=>'','class'=>'fancy brown')) }}
				{{ Form::file('file','',array('id'=>'','class'=>'brown img-upload')) }}
			</div>
		</div>
	<button class="btn btn-default fancy">Save</button>
	{{ Form::close() }}
@stop

@section('js')
	<script>
		$("#create_nav").addClass("active");
		$("#add_nav").text("Edit Region");
	</script>
@stop