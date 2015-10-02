<div class="container">
	<div class="well full col-xs-12">
		<span class="slider-title fancy">Flavor</span>
		<input id="flavor" name="flavor" data-slider-id='flavor' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="5.5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Aroma</span>
		<input id="aroma" name="aroma" data-slider-id='aroma' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="5.5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Aftertaste</span>
		<input id="aftertaste" name="aftertaste" data-slider-id='aftertaste' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="5.5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Balance</span>
		<input id="balance" name="balance" data-slider-id='balance' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="5.5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Roast</span>
		<input id="roast" name="roast" data-slider-id='roast' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="5.5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Body</span>
		<input id="body" name="body" data-slider-id='body' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="5.5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Acidity</span>
		<input id="acidity" name="acidity" data-slider-id='aroma' type="number" data-slider-min="1" data-slider-max="10" data-slider-step="0.5" data-slider-value="5.5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Price per Bag</span>
			<div class="input-group"> 
    		<span class="input-group-addon">$</span>
    		<input type="number" name="price" value="0.00" min="0.00" step="0.50" data-number-to-fixed="3" data-number-stepfactor="100" class="form-control currency"/>
		</div>
    </div>
    <div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Bag Size</span>
		<div class="input-group">
    		<input type="number" name="bag_size_grams" id="bag-size" value="0" min="0" step="0.0" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency"/>
    		<span class="input-group-addon" id="basic-addon2">oz.</span>
		</div>
    </div>
    <div class="well col-xs-12 col-s-6 full">
    	<span class="slider-title fancy">Review</span><br>
    	<textarea class="input-group form-control clear" name="review" cols="50" rows="10" placeholder="Write your review here..."></textarea>
    </div>
    <div class="well col-xs-12 col-s-6 full">
        <span class="slider-title fancy clear-both">Choose 3 Notes</span>

        <select class="form-control flavors tier-one" id="category1">
			<option>Categories:</option>
			@foreach ($categories as $cat)
				<option value="{{{ $cat->id }}}">
					{{{ (ucfirst($cat->name)) }}}
				</option>
			@endforeach
		</select>

		<select class="form-control flavors tier-two" id="flavor1" name="flavor1">
			<option>Please select a Category first...</option>
		</select>
		
		<select class="form-control flavors tier-one" id="category2">
			<option>Categories:</option>
			@foreach ($categories as $cat)
				<option value="{{{ $cat->id }}}">
					{{{ (ucfirst($cat->name)) }}}
				</option>
			@endforeach
		</select>

		<select class="form-control flavors tier-two" id="flavor2" name="flavor2">
			<option>Please select a Category first...</option>
		</select>

		<select class="form-control flavors tier-one" id="category3">
			<option>Categories:</option>
			@foreach ($categories as $cat)
				<option value="{{{ $cat->id }}}">
					{{{ (ucfirst($cat->name)) }}}
				</option>
			@endforeach
		</select>

		<select class="form-control flavors tier-two" id="flavor3" name="flavor3">
			<option>Please select a Category first...</option>
		</select>
    </div>

    <div class="well col-xs-12 col-s-6 full">
	    <span class="slider-title fancy clear-both">Brew Parameters (optional)</span>
	    <div class="col-xs-6 col-s-6">
	    	<input type="text" name="grind" placeholder="Grind (ex: Medium, Burr)" class="form-control small">
	    	<input type="number" name="brew_time" min="0"class="form-control small" placeholder="Brew Time in seconds (ex: 240 = 4 min.)"/>
	    	<input type="number" name="water_temp" min="0.00" step="0.10" data-number-to-fixed="3" data-number-stepfactor="100" class="form-control small" placeholder="Water Temp in &deg;F"/>
    	</div>
    	<div class="col-xs-6 col-s-6">
	    	<input type="number" name="water_weight" min="0.00" step="0.10" data-number-to-fixed="3" data-number-stepfactor="100" class="form-control small" placeholder="Water Weight in grams"/>
	    	<input type="number" name="coffee_weight" min="0.00" step="0.10" data-number-to-fixed="3" data-number-stepfactor="100" class="form-control small" placeholder="Coffee Weight in grams"/>
	    	<input type="text" name="brewer" placeholder="Brewer (ex: Chemex -or- V60)" class="form-control small">
    	</div>
    	<div class="col-xs-12">
	    	<textarea name="method"class="form-control full" placeholder="Enter your brewing methods here (ie: bloom time, other equipment used) and any other factors or tidbits you wish to share!"></textarea>
    	</div>
    </div>
    <div class="well col-xs-12 full">
    	<div class="col-xs-12">
    		<span class="slider-title fancy clear-both">Roast Date (optional)</span>
    		<input type="date" name="roast_date" class="form-control small">
    	</div>
	</div>

    <button class="btn btn-default fancy">Save</button>
</div>