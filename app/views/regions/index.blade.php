
@extends('layouts.master')

@section('title', 'REGIONS')

@section('content')
	<section>
		<div class="container">
		    <table class="table table-responsive table-hover">
		    	<thead>
		    		<tr>
		    			<th>Region</th>
		    			<th>Description</th>
		    		</tr>
		    	</thead>
				<tbody>
				@foreach ($regions as $r)
				    <tr>
				        <td class="region-name">{{ HTML::linkAction('RegionsController@show', $r->name, array($r->id)) }}</td>
				        <td>{{ $r->description }}</td>
				    </tr>
				@endforeach
			    </tbody>
		    </table>
		</div>
	</section>
@stop