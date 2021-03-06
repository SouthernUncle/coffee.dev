<div class="container">
	<div class="slider full col-xs-12">
		<span class="slider-title fancy">Flavor</span>
		<input id="flavor" name="flavor" data-slider-id='flavor' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" @if(Input::old('flavor')) data-slider-value="{{ Input::old('flavor') }}" @else data-slider-value="5" @endif/>
	</div>
	<div class="slider col-xs-12 col-s-6 col-md-6">
		<span class="slider-title fancy">Aroma</span>
		<input id="aroma" name="aroma" data-slider-id='aroma' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" @if(Input::old('aroma')) data-slider-value="{{ Input::old('aroma') }}" @else data-slider-value="5" @endif/>
	</div>
	<div class="slider col-xs-12 col-s-6 col-md-6">
		<span class="slider-title fancy">Aftertaste</span>
		<input id="aftertaste" name="aftertaste" data-slider-id='aftertaste' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" @if(Input::old('aftertaste')) data-slider-value="{{ Input::old('aftertaste') }}" @else data-slider-value="5" @endif/>
	</div>
	<div class="slider col-xs-12 col-s-6 col-md-6">
		<span class="slider-title fancy">Balance</span>
		<input id="balance" name="balance" data-slider-id='balance' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" @if(Input::old('balance')) data-slider-value="{{ Input::old('balance') }}" @else data-slider-value="5" @endif/>
	</div>
	<div class="slider col-xs-12 col-s-6 col-md-6">
		<span class="slider-title fancy">Roast</span>
		<input id="roast" name="roast" data-slider-id='roast' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" @if(Input::old('roast')) data-slider-value="{{ Input::old('roast') }}" @else data-slider-value="5" @endif/>
	</div>
	<div class="slider col-xs-12 col-s-6 col-md-6">
		<span class="slider-title fancy">Body</span>
		<input id="body" name="body" data-slider-id='body' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" @if(Input::old('body')) data-slider-value="{{ Input::old('body') }}" @else data-slider-value="5" @endif/>
	</div>
	<div class="slider col-xs-12 col-s-6 col-md-6">
		<span class="slider-title fancy">Acidity</span>
		<input id="acidity" name="acidity" data-slider-id='acidity' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" @if(Input::old('acidity')) data-slider-value="{{ Input::old('acidity') }}" @else data-slider-value="5" @endif/>
	</div>
	<div class="col-12-xs col-md-12">
		<hr>
	</div>
	<div class="col-xs-12 col-s-6 col-md-6">
		<span class="slider-title fancy clear-both">Price per Bag</span>
			<div class="input-group"> 
    		<span class="input-group-addon">$</span>
    		<input type="number" name="price" @if(Input::old('price')) value="{{ Input::old('price') }}" @else value="0.00" @endif min="0.00" step="0.50" data-number-to-fixed="3" data-number-stepfactor="100" class="form-control currency"/>
		</div>
    </div>
    <div class="col-xs-12 col-s-6 col-md-6">
		<span class="slider-title fancy clear-both">Bag Size</span>
		<div class="input-group">
    		<span class="input-group-addon">ounces:</span>
    		<input type="number" name="bag_size_grams" id="bag-size" @if(Input::old('bag_size_grams')) value="{{ Input::old('bag_size_grams') }}" @else value="0.00" @endif min="0" step="0.0" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency"/>
		</div>
    </div>
	<div class="col-12-xs col-md-12">
		<hr>
	</div>    
    <div class="col-xs-12">
    	<span class="slider-title fancy clear-both">Review</span>
    	<textarea class="input-group form-control clear" name="review" cols="50" rows="10" placeholder="Write your review here...">{{{ Input::old('review') }}}</textarea>
    </div>
    <div class="col-xs-12 col-s-6 full col-md-6">
        <span class="slider-title fancy clear-both">Choose 3 Primary Flavor Notes</span>

        <select class="form-control flavors tier-one" id="category1" name="category1">
			<option value="0">Categories:</option>
			@foreach ($categories as $cat)
				<option @if(Input::old('category1') == $cat->id) selected @endif value="{{{ $cat->id }}}">
					{{{ (ucfirst($cat->name)) }}}
				</option>
			@endforeach
		</select>

		<select class="form-control flavors tier-two" id="flavor1" name="flavor1">
			<option value="0">Please select a Category first...</option>
		</select>
		
		<select class="form-control flavors tier-one" id="category2" name="category2">
			<option value="0">Categories:</option>
			@foreach ($categories as $cat)
				<option @if(Input::old('category2') == $cat->id) selected @endif value="{{{ $cat->id }}}">
					{{{ (ucfirst($cat->name)) }}}
				</option>
			@endforeach
		</select>

		<select class="form-control flavors tier-two" id="flavor2" name="flavor2">
			<option value="0">Please select a Category first...</option>
		</select>

		<select class="form-control flavors tier-one" id="category3" name="category3">
			<option value="0">Categories:</option>
			@foreach ($categories as $cat)
				<option @if(Input::old('category3') == $cat->id) selected @endif value="{{{ $cat->id }}}">
					{{{ (ucfirst($cat->name)) }}}
				</option>
			@endforeach
		</select>

		<select class="form-control flavors tier-two" id="flavor3" name="flavor3">
			<option value="0">Please select a Category first...</option>
		</select>

		<div class="col-xs-12">
    		<span class="slider-title fancy clear-both">Roast Date (optional)</span>
    		<input type="date" name="roast_date" class="form-control small">
    	</div>
    </div>

    <div class="col-xs-12 col-s-6 full col-md-6">
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
	    	<textarea name="method" class="form-control full" placeholder="Enter your brewing methods here (ie: bloom time, other equipment used) and any other factors or tidbits you wish to share!"></textarea>
    	</div>
    </div>
    <div class="col-xs-12 full col-md-6">
    	
	</div>

    <button class="btn btn-default fancy">Save</button>
</div>