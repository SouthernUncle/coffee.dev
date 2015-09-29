@extends('layouts.master')

@section('title', 'Log In')

@section('content')
	<section>
		<div class="container">
		    <div class="row">
		        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			        {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-horizontal', 'id' => 'login')) }}
			            <div id="loginForm" class="form-group col-xs-12">
			                <div class="row">
			                	{{ Form::label('username', 'Username') }}
								{{ Form::text('username', null, [ 'autofocus', 'class' => 'form-control']) }}

								{{ Form::label('password', 'Password') }}
								{{ Form::password('password', null, ['class' => 'form-control']) }}

		                        <button class="btn btn-default">Login</button>
		                    </div>
			            </div>
			        {{ Form::close() }}
		        </div>
		    </div>
		</div>
	</section>
@stop
