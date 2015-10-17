@extends('layouts.master')

@section('title', 'Forgot Password')

@section('content')
	<div class="container">
        {{ Form::open(array('action' => 'HomeController@sendPasswordLink', 'class' => 'form-horizontal', 'id' => 'login')) }}
            <div class="col-xs-12 col-s-12 col-md-12">
            	<div class="col-s-6 col-md-6">
            	{{ Form::label('email', 'Email', ['class' => 'fancy']) }}
				{{ Form::email('email', null, [ 'autofocus', 'class' => 'form-control brown']) }}
				</div>
			</div>
            <div class="col-xs-12 col-md-12">
            	<div class ="col-xs-12 col-sm-12 col-md-12">
		            <button class="btn btn-info">Send Reset Link</button>
	            </div>
            </div>
        {{ Form::close() }}
	</div>
@stop

@section('js')
<script>
    "use strict";
    $(document).ready(function() {
        $("#user_nav").addClass("active");
        $("#new_user_nav").text("Reset Password");
    });
</script>
@stop