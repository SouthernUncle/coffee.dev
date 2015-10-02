@extends('layouts.master')

@section('title')
	My {{ $review->coffee->name }} Review
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/form.css">
@stop

@section('content')
	<div class="container">
		<div class ="well titles">
			<!-- HEADER -->
			<h1 class="yellow">{{ $review->coffee->name }}</h1>
			<span class="fancy yellow small"> - by - </span>
			<h2 class="fancy yellow">{{ $review->coffee->roaster->name }}</h2>
		</div>
	{{ Form::model($review, array('action' =>array('ReviewsController@update', $review->id), 'method' =>'PUT')) }}
		<!-- REVIEW SLIDERS -->
		<div class="well full col-xs-12">
			<span class="slider-title fancy">Flavor</span>
			<input id="flavor" name="flavor" data-slider-id='flavor' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->flavor }}}"/>
		</div>
		<div class="well col-xs-12 col-s-6">
			<span class="slider-title fancy">Aroma</span>
			<input id="aroma" name="aroma" data-slider-id='aroma' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->aroma }}}"/>
		</div>
		<div class="well col-xs-12 col-s-6">
			<span class="slider-title fancy">Aftertaste</span>
			<input id="aftertaste" name="aftertaste" data-slider-id='aftertaste' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->aftertaste }}}"/>
		</div>
		<div class="well col-xs-12 col-s-6">
			<span class="slider-title fancy">Balance</span>
			<input id="balance" name="balance" data-slider-id='balance' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->balance }}}"/>
		</div>
		<div class="well col-xs-12 col-s-6">
			<span class="slider-title fancy">Roast</span>
			<input id="roast" name="roast" data-slider-id='roast' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->roast }}}"/>
		</div>
		<div class="well col-xs-12 col-s-6">
			<span class="slider-title fancy">Body</span>
			<input id="body" name="body" data-slider-id='body' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->body }}}"/>
		</div>
		<div class="well col-xs-12 col-s-6">
			<span class="slider-title fancy">Acidity</span>
			<input id="acidity" name="acidity" data-slider-id='aroma' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="{{{ $review->acidity }}}"/>
		</div>

		<!-- PURCHASE INFO -->
		<div class="well col-xs-12 col-s-6">
    		<span class="slider-title fancy">Price per Bag</span>
				<div class="input-group"> 
        		<span class="input-group-addon">$</span>
        		<input type="number" name="price" value="{{ $review->price }}" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency"/>
			</div>
        </div>
        <div class="well col-xs-12 col-s-6">
    		<span class="slider-title fancy">Bag Size</span>
    		<div class="input-group">
        		<input type="number" value="{{ Review::convertToOunces($review->bag_size_grams) }}" min="0" step="0.1" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" name="bag_size_grams"/>
        		<span class="input-group-addon" id="basic-addon2">oz.</span>
    		</div>
        </div>

        <!-- REVIEW TEXT -->
        <div class="well col-xs-12 col-s-6 full">
        	<span class="slider-title fancy">Review</span>
        	<textarea class="input-group form-control clear" name="review" cols="50" rows="10">{{ $review->review }}</textarea>
        </div>

        <!-- FLAVOR NOTES -->
        <div class="well col-xs-12 col-s-6 full">
	        <span class="slider-title fancy clear-both">Choose 3 Notes</span>
        	<?php $i = 0; ?>
	       	@if(isset($review->reviewFlavors[0]))
		        @foreach($review->reviewFlavors as $index => $flavor)
		        	<?php $i++; ?>
			        <select class="form-control flavors tier-one" id="category{{{ $index }}}">
						<option>Categories:</option>
						@foreach ($categories as $cat)
							<option value="{{{ $cat->id }}}" @if($cat->id == $flavor->category_id) selected @endif>
								{{{ (ucfirst($cat->name)) }}}
							</option>
						@endforeach
					</select>

					<select class="form-control flavors tier-two" id="flavor{{{ $index }}}" name="flavor{{{ $index }}}" data-flavorid="{{ $flavor->id }}">
						<option>Please select a Category first...</option>
					</select>
		        @endforeach
	        @endif

        	@while($i <= 2)
    			<select class="form-control flavors tier-one" id="category{{{ $i }}}">
    				<option>Categories:</option>
    				@foreach ($categories as $cat)
						<option value="{{{ $cat->id }}}">
							{{{ (ucfirst($cat->name)) }}}
						</option>
					@endforeach	
    			</select>

    			<select class="form-control flavors tier-two" id="flavor{{{ $i }}}" name="flavor{{{ $i }}}">
					<option>Please select a flavor:</option>
				</select>
        		<?php $i++; ?>

        	@endwhile
        </div>

        <div class="well col-xs-12 col-s-6 full">
	    <span class="slider-title fancy clear-both">Brew Parameters (optional)</span>
	    <div class="col-xs-6 col-s-6">
	    	<input type="text" name="grind" placeholder="Grind (ex: Medium, Burr)" class="form-control small" value="@if(isset($review->parameter->grind)){{{ $review->parameter->grind }}}@endif">
	    	<input type="number" name="brew_time" min="0"class="form-control small" placeholder="Brew Time in seconds (ex: 240 = 4 min.)" value="@if(isset($review->parameter->brew_time)){{{ $review->parameter->brew_time }}}@endif"/>
	    	<input type="number" name="water_temp" min="0.00" step="0.10" data-number-to-fixed="3" data-number-stepfactor="100" class="form-control small" placeholder="Water Temp in &deg;F" value="@if(isset($review->parameter->water_temp)){{{ $review->parameter->water_temp }}}@endif"/>
    	</div>
    	<div class="col-xs-6 col-s-6">
	    	<input type="number" name="water_weight" min="0.00" step="0.10" data-number-to-fixed="3" data-number-stepfactor="100" class="form-control small" placeholder="Water Weight in grams" value="@if(isset($review->parameter->water_weight)){{{ $review->parameter->water_weight }}}@endif"/>
	    	<input type="number" name="coffee_weight" min="0.00" step="0.10" data-number-to-fixed="3" data-number-stepfactor="100" class="form-control small" placeholder="Coffee Weight in grams" value="@if(isset($review->parameter->coffee_weight)){{{ $review->parameter->coffee_weight }}}@endif"/>
	    	<input type="text" name="brewer" placeholder="Brewer (ex: Chemex -or- V60)" class="form-control small" value="@if(isset($review->parameter->brewer)){{{ $review->parameter->brewer }}}@endif"/>
    	</div>
    	<div class="col-xs-12">
	    	<textarea class="form-control full" placeholder="Enter your brewing methods here (ie: bloom time, other equipment used) and any other factors or tidbits you wish to share!">@if(isset($review->parameter->method)){{ $review->parameter->method }}@endif</textarea>
    	</div>
    </div>
    <div class="well col-xs-12 full">
    	<div class="col-xs-12">
    		<span class="slider-title fancy clear-both">Roast Date (optional)</span>
    		<input type="date" name="roast_date" class="form-control small" value="@if(isset($review->parameter->roast_date)){{{ $review->parameter->roast_date }}}@endif">
    	</div>
	</div>

    <button class="btn btn-default fancy">Save</button>

	{{ Form::close() }}
	</div>
@stop

@section('js')
	<script>
	// $(document).ready(function() {
	"use strict";
		var route = "/categories/flavors/";

		var master = $("#category0");
		var dependent = $("#flavor0");
		getDropdown(master, dependent);

		master = $("#category1");
		dependent = $("#flavor1");
		getDropdown(master, dependent);

		master = $("#category2");
		dependent = $("#flavor2");
		getDropdown(master, dependent);

		function getDropdown(master, dependent) {
			$.get(route + master.val()).done(function(data) {
					var $options = dependent;
					var flavor_id = dependent.data('flavorid');
					$options.empty();
					console.log(data);
					$.each(data, function(index, value) {
						var optionString = '<option value="' + index +'" ';
							if(index == flavor_id) {
								optionString += ' selected';
							}
						optionString += '>' + value + '</option>';
						
						$options.append(optionString);
					});
					dependent.trigger("change"); 
				});

			master.change(function() {
				$.get(route + master.val()).done(function(data) {
					var $options = dependent;
					$options.empty();
					console.log(data);
					$.each(data, function(index, value) {
						$options.append('<option value="' + index +'">' + value + '</option>');
					});
					dependent.trigger("change"); 
				});
			});
		};

		// With JQuery
		$('#aroma').slider({
			formatter: function(value) {
				return 'Aroma: ' + value;
			}
		});

		$('#flavor').slider({
			formatter: function(value) {
				return 'Flavor: ' + value;
			}
		});

		$('#aftertaste').slider({
			formatter: function(value) {
				return 'Aftertaste: ' + value;
			}
		});

		$('#balance').slider({
			formatter: function(value) {
				return 'Balance: ' + value;
			}
		});

		$('#roast').slider({
			formatter: function(value) {
				return 'Roast: ' + value;
			}
		});

		$('#body').slider({
			formatter: function(value) {
				return 'Body: ' + value;
			}
		});

		$('#acidity').slider({
			formatter: function(value) {
				return 'Acidity: ' + value;
			}
		});
	// });

  </script>
@stop