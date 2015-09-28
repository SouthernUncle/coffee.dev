@extends('layouts.master')

@section('title')
	My New Review
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/form.css">
@stop

@section('content')
	<section>
		<div class="container">

		<div class="well col-xs-12 col-md-6">
			<h4 class="yellow fancy">Select Roaster</h4>
				<select class="form-control" name="roaster">
					@foreach ($roasters as $r)
						<option value="{{{ $r->id }}}">
							{{{ $r->name }}} - {{{ $r->city }}}, {{{ $r->state }}}
						</option>
					@endforeach
				</select>
			<h4 class="yellow fancy">Select Coffee</h4>
				<select>
				
				</select>

		</div>
		<div class="well col-xs-12 col-md-6">
			<h4 class="yellow fancy">Don't see what you're looking for?</h4>
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add a New Roaster</button>
			<h4 class="yellow fancy">or</h4>
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add a New Coffee</button>
		</div>

			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
				    <!-- Modal content-->
				    <div class="modal-content">
				    	<div class="modal-header">
				      		<button type="button" class="close" data-dismiss="modal">&times;</button>
				        	<h4 class="modal-title">Modal Header</h4>
				    	</div>
				    	<div class="modal-body">
				      		<p>Some text in the modal.</p>
				    	</div>
				    		<div class="modal-footer">
				      		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    	</div>
				    </div>
			  </div>
			</div>
		</div>
	</section>
@stop

@section('js')
	<script>
	$(document).ready(function(){
		
	});
</script>
@stop