@extends('layouts.master')

@section('title', 'ROASTERS')

@section('style')
<style>
	.paginfix {
		color: #FED316;
	}
</style>
@stop

@section('content')
	<div class="container">
		{{ Form::open(array('action' => 'RoastersController@index', 'method' => 'get')) }}
            {{ Form::text('search', null, ['class' => 'form-control search', 'placeholder' => 'Search...']) }}
        {{ Form::close() }}
	    <table class="table table-responsive table-hover">
	    	<thead>
	    		<tr>
	    			<th>Name</th>
	    			<th>Location</th>
	    			<th>Number of Coffees</th>
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
		<div class="paginfix">{{ $roasters->links() }}</div>
	</div>
@stop