
@extends('layouts.master')

@section('title', 'REGIONS')

@section('content')
	<section>
		<div class="container">
			<h1>Regions</h1>
			<div class="region-[photos">
				@foreach($regions as $r)
					<span class="col-md-4 col-sm-4">
						<img src="{{ $r->img_url }}">
						<h2 class="region-name">{{ $r->name }}</h2>
					</span>
				@endforeach
			</div>

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