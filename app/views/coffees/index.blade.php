@extends('layouts.master')

@section('title', 'COFFEES')

@section('content')
	<section>
		<div class="container">
		<br><br><br><br>
		    <table>
		@foreach ($coffees as $c)
		    <tr>
		        <td><a href="/coffees/{{ $c->id }}">{{ $c->name }}</a></td>
		        <td>{{ $c->region->name }}</td>
		        <td>{{ $c->roaster->name }}</td>
		        <td>{{ $c->roasters_description }}</td>
		    </tr>
		@endforeach
		    </table>
		</div>
	</section>
@stop

@section('js')
<script>
// You need to have the script tags in here.
</script>
@stop

