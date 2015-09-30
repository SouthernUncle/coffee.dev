@extends('layouts.master')

@section('title', 'ROASTERS')

@section('content')
	<section>
		<div class="container">
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
		</div>
	</section>
@stop