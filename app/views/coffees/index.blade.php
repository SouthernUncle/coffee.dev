@extends('layouts.master')

@section('title', 'COFFEES')

@section('content')
	<section>
		<div class="container">
			{{ Form::open(array('action' => 'CoffeesController@index', 'method' => 'get')) }}
                {{ Form::text('search', null, ['class' => 'form-control search', 'placeholder' => 'Search...']) }}
            {{ Form::close() }}
		    <table class="table table-responsive table-hover">
		    	<thead>
		    		<tr>
		    			<th>Name</th>
		    			<th>Region</th>
		    			<th>Roaster</th>
	    				<th>Overall Rating</th>
	    				<th>Number of Reviews</th>
		    		</tr>
		    	</thead>
		    	<tbody>
				@foreach ($coffees as $c)
				    <tr>
				        <td class="coffee-name">{{ HTML::linkAction('CoffeesController@show', $c->name, array($c->id)) }}</td>
				        <td class="region-name">{{ HTML::linkAction('RegionsController@show', $c->region->name, array($c->region->id)) }}</td>
				        <td>{{ HTML::linkAction('RoastersController@show', $c->roaster->name, array($c->roaster->id)) }}</td>
				        <td>{{ $c->overallCoffeeRating() }}</td>
				        <td>{{ $c->reviews->count() }}</td>
				    </tr>
				@endforeach
				</tbody>
		    </table>
			<div>
				{{ $coffees->links() }}
			</div>
		</div>
	</section>
@stop