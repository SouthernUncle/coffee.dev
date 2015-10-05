@extends('layouts.master')

@section('title', 'Log In')

@section('content')
	<div class="container">
        {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-horizontal', 'id' => 'login')) }}
            <div class="col-xs-12 col-md-12">
            	{{ Form::label('username', 'Username', ['class' => 'fancy']) }}
				{{ Form::text('username', null, [ 'autofocus', 'class' => 'form-control']) }}
			</div>

			<div class="col-xs-12 col-md-12">
				{{ Form::label('password', 'Password', ['class' => 'fancy']) }}
				{{ Form::password('password', ['class' => 'form-control']) }}

            </div>

            <div class="col-xs-12 col-md-12">
	            <button class="btn btn-default">Log In</button>
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