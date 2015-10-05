@extends('layouts.master')

@section('title')
	{{ $region->name }}
@stop

@section('style')
    <style>
        .btn {margin-top:10px; margin-bottom:10px;}
    </style>
@stop

@section('content')
    <div class="container">
        <h1>{{ $region->name }}</h1>
        <p>{{ $region->description }}</p>
        <img src="{{ $region-> map_url }}">
        <br>
        @if(Auth::check() && Auth::user()->role_id == 1)
            <a href="{{{ action('RegionsController@edit', $region->id) }}}">
                <button class="btn btn-info">Edit</button>
            </a>
        @endif
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
	            @if(isset($c->reviews[0]))
                    <td>{{ $c->overallCoffeeRating() }}</td>
                @else
                    <td>Not Yet Rated</td>
                @endif
	            <td>{{ $c->reviews->count() }}</td>
	        </tr>
        @endforeach
		</table>
		<div class="paginfix">{{ $coffees->links() }}</div>
    </div>
@stop

@section('js')
<script>
    "use strict";
    $(document).ready(function() {
        $("#region_nav").addClass("active");
    });
</script>
@stop