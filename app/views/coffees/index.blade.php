@extends('layouts.master')

@section('title', 'COFFEES')

@section('content')
	<div class="container">
		<div class="col-xs-12">
			{{ Form::open(array('action' => 'CoffeesController@index', 'method' => 'get')) }}
	            {{ Form::text('search', null, ['class' => 'form-control search', 'placeholder' => 'Search...']) }}
	        {{ Form::close() }}
        </div>
        <div class="col-xs-12">
		    <table class="table table-responsive table-hover">
		    	<thead>
		    		<tr>
		    			<th>Coffee</th>
		    			<th>Region</th>
		    			<th>Roaster</th>
	    				<th>Overall</th>
	    				<th>Reviews</th>
		    		</tr>
		    	</thead>
		    	<tbody>
				@foreach ($coffees as $c)
				    <tr>
				        <td class="coffee-name">{{ HTML::linkAction('CoffeesController@show', $c->name, array($c->url_name)) }}</td>
				        <td class="region-name">{{ HTML::linkAction('RegionsController@show', $c->region->name, array($c->region->url_name)) }}</td>
				        <td>{{ HTML::linkAction('RoastersController@show', $c->roaster->name, array($c->roaster->url_name)) }}</td>

	                    @if(isset($c->reviews[0]))
	                        <td>{{ $c->overallCoffeeRating() }}</td>
	                    @else
	                        <td>Not Yet Rated</td>
	                    @endif	

	                    <td>{{ $c->reviews->count() }}</td>
    			    </tr>
    			@endforeach
				</tbody>
		    </table>
	    </div>
	    <div class="col-xs-12">
	    	<a href="{{ action('CoffeesController@create') }}">
	        	<button class="btn btn-default btn-sm">
	        		Create Coffee
	        	</button>
	        </a>
	    </div>
		<div class="col-xs-12">
			{{ $coffees->links() }}
		</div>
	</div>
@stop

@section('js')
	<script>
	    "use strict";
	    $(document).ready(function() {
	        $("#coffee_nav").addClass("active");
	    });
	</script>
@stop