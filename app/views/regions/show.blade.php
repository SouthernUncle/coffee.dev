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
	        @foreach ($region->coffees as $c)
	            <h3>{{ HTML::linkAction('CoffeesController@show', $c->name, array($c->id)) }}</h3>
	            <h5>{{ HTML::linkAction('RoastersController@show', $c->roaster->name, array($c->roaster->id)) }}</h5>
	        @endforeach
	    </div>
	</section>
@stop
