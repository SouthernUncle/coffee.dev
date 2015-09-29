<div class="container">
	<div class="well full col-xs-12">
		<span class="slider-title fancy">Flavor</span>
		<input id="flavor" name="flavor" data-slider-id='flavor' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Aroma</span>
		<input id="aroma" name="aroma" data-slider-id='aroma' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Aftertaste</span>
		<input id="aftertaste" name="aftertaste" data-slider-id='aftertaste' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Balance</span>
		<input id="balance" name="balance" data-slider-id='balance' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Roast</span>
		<input id="roast" name="roast" data-slider-id='roast' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Body</span>
		<input id="body" name="body" data-slider-id='body' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
	</div>
	<div class="well col-xs-12 col-s-6">
		<span class="slider-title fancy">Acidity</span>
		<input id="acidity" name="acidity" data-slider-id='aroma' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
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

    <button class="btn btn-default fancy">Save</button>
</div>