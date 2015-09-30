@extends('layouts.master')

@section('title', 'COFFEES')

@section('content')
	<section>
		<div class="container">
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
				<tr>
					<td>{{ $coffees->links() }}</td>
				</tr>
				</tbody>
		    </table>
		</div>
	</section>
@stop