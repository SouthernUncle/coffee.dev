@extends('layouts.master')

@section('title', 'Log In')

@section('content')
	<div class="container">
        {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-horizontal', 'id' => 'login')) }}
            <div class="col-xs-12 col-s-12 col-md-12">
            	<div class="col-s-6 col-md-6">
            	{{ Form::label('username', 'Username', ['class' => 'fancy']) }}
				{{ Form::text('username', null, [ 'autofocus', 'class' => 'form-control brown']) }}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="col-sm-6 col-md-6">
				{{ Form::label('password', 'Password', ['class' => 'fancy']) }}
				{{ Form::password('password', ['class' => 'form-control brown']) }}
				</div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-sm-6 col-md-6">
                    <a href="{{ action('HomeController@showForgotPassword') }}" class="yellow fancy">
                        Forgot Password?
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
            	<div class ="col-xs-12 col-sm-12 col-md-12">
		            <button class="btn btn-info">Log In</button>
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
    });
</script>
@stop