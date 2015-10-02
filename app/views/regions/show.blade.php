@extends('layouts.master')

@section('title')
	{{ $region->name }}
@stop

@section('content')
	<section>
	    <div class="container">
	        <h1>{{ $region->name }}</h1>
	        <p>{{ $region->description }}</p>
	        <img src="{{ $region-> map_url }}">
	        {{ Form::open(array('action' => ['RegionsController@show', $region->id], 'method' => 'get')) }}
                {{ Form::text('search', null, ['class' => 'form-control search', 'placeholder' => 'Search...']) }}
            {{ Form::close() }}
            <table class="table table-responsive">
            	<tr>
            		<th>Coffee</th>
            		<th>Roaster</th>
            		<th>Overall Rating</th>
            		<th>Number of Reviews</th>
            	</tr>
	        @foreach ($coffees as $c)
		        <tr>
		            <td>{{ HTML::linkAction('CoffeesController@show', $c->name, array($c->id)) }}</td>
		            <td>{{ HTML::linkAction('RoastersController@show', $c->roaster->name, array($c->roaster->id)) }}</td>
		            <td>{{ $c->overallCoffeeRating() }}</td>
		            <td>{{ $c->reviews->count() }}</td>
		        </tr>
	        @endforeach
			</table>
			<div class="paginfix">{{ $coffees->links() }}</div>
	    </div>
	</section>
@stop
