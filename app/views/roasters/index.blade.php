@extends('layouts.master')

@section('title', 'ROASTERS')

@section('content')
	<div class="container">
		<div class="col-xs-12">
			{{ Form::open(array('action' => 'RoastersController@index', 'method' => 'get')) }}
	            {{ Form::text('search', null, ['class' => 'form-control search', 'placeholder' => 'Search...']) }}
	        {{ Form::close() }}
        </div>
        <div class="col-xs-12">
		    <table class="table table-responsive table-hover">
		    	<thead>
		    		<tr>
		    			<th>Roaster</th>
		    			<th>Location</th>
		    			<th>Coffees</th>
		    		</tr>
		    	</thead>
				<tbody>
				@foreach ($roasters as $r)
				    <tr>
				        <td>{{ HTML::linkAction('RoastersController@show', $r->name, array($r->id)) }}</td>
				        <td>{{ $r->city . ", " . $r->state }}</td>
				        <td>{{ $r->coffees->count() }}</td>
				    </tr>
				@endforeach
			    </tbody>
		    </table>
	    </div>
	    <div class="col-xs-12">
	    	<a href="{{ action('RoastersController@create') }}">
	        	<button class="btn btn-default btn-sm">
	        		Create Roaster
	        	</button>
	        </a>
	    </div>
		<div class="col-xs-12">
			{{ $roasters->links() }}
		</div>
	</div>
@stop

@section('js')
	<script>
	    "use strict";
	    $(document).ready(function() {
	        $("#roaster_nav").addClass("active");
	    });
	</script>
@stop