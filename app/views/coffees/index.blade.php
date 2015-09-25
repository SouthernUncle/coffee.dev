@extends('layouts.master')

@section('title', 'COFFEES')

@section('content')
	<section>
		<div class="container">
		    <table class="table table-responsive">
		    	<thead>
		    		<tr>
		    			<th>Name</th>
		    			<th>Region</th>
		    			<th>Roaster</th>
	    				<th>Description</th>
		    		</tr>
		    	</thead>
		    	<tbody>
				@foreach ($coffees as $c)
				    <tr>
				        <td>{{ HTML::linkAction('CoffeesController@show', $c->name, array($c->id)) }}</td>
				        <td>{{ HTML::linkAction('RegionsController@show', $c->region->name, array($c->region->id)) }}</td>
				        <td>{{ HTML::linkAction('RoastersController@show', $c->roaster->name, array($c->roaster->id)) }}</td>
				        <td>{{ $c->roasters_description }}</td>
				    </tr>
				@endforeach
				</tbody>
		    </table>
		</div>
	</section>
@stop