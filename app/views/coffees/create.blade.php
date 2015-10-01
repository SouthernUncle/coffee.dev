@extends('layouts.master')

@section('title', 'My New Coffee')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/form.css">
	<link rel="stylesheet" type="text/css" href="/css/create-review.css">
@stop

@section('content')
	<section>
		<div class="container head">
			{{ Form::open(array('action' => 'CoffeesController@store')) }}
			<div class="well col-xs-12">
				<h1 class="yellow heading">Create New Coffee</h1>
				<div class="col-xs-12 col-md-6">
				<h4 class="yellow fancy">Select Region:</h4>
					<select class="form-control" name="roaster" id="roaster">
							<option>Region:</option>
						@foreach ($regions as $re)
							<option value="{{{ $re->id }}}">
								{{{ $re->name }}}
							</option>
						@endforeach
					</select>
				</div>
				<div class="col-xs-12 col-md-6">
				<h4 class="yellow fancy">Select Roaster</h4>
					<select class="form-control" name="roaster" id="roaster">
							<option>Roaster:</option>
						@foreach ($roasters as $r)
							<option value="{{{ $r->id }}}">
								{{{ $r->name }}} - {{{ $r->city }}}, {{{ $r->state }}}
							</option>
						@endforeach
					</select>
				</div>	
			</div>
			{{ Form::close() }}
		</div>
	</section>
@stop