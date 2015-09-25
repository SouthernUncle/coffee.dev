
@extends('layouts.master')

@section('title', 'REGIONS')

@section('content')
	<section>
		<div class="container">
		    <table class="table table-responsive">
		    	<thead>
		    		<tr>
		    			<th>Region</th>
		    			<th>Description</th>
		    		</tr>
		    	</thead>
				@foreach ($regions as $r)
					<tbody>
					    <tr>
					        <td>{{ HTML::linkAction('RegionsController@show', $r->name, array($r->id)) }}</td>
					        <td>{{ $r->description }}</td>
					    </tr>
				    </tbody>
				@endforeach
		    </table>
		</div>
	</section>
@stop