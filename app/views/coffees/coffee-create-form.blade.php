<div class="col-xs-12 col-sm-6 col-md-6">
	<span class="brown fancy">Name</span>
		<input type="text" name="name" class="form-control coffee-input brown" placeholder="i.e. 'La Simetria'" value="{{{ Input::old('name') }}}"/>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
	<span class="brown fancy">URL</span>
		<input type="url" name="url" class="form-control coffee-input brown" placeholder="i.e. 'http://meritcoffee.com/la_simetria'" value="{{{ Input::old('url') }}}"/>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
	<span class="brown fancy">Process</span>
	<input type="text" name="process" id="process" class="form-control coffee-input" placeholder="i.e. 'Washed' or 'Natural'" value="{{{ Input::old('process') }}}"/>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
	<span class="brown fancy">Elevation</span>
	<input type="text" name="elevation" id="elevation" class="form-control coffee-input" placeholder="i.e. '1800m'" value="{{{ Input::old('elevation') }}}"/>
</div>
<div class="col-xs-12">
	<span class="brown fancy">Description</span>
	<textarea name="description" rows="5" class="form-control" placeholder="Enter the roaster's description of this coffee.">{{{ Input::old('description') }}}</textarea>
</div>
<div class="upload col-xs-12 col-md-6">
    {{ Form::label('file','Image Upload',array('id'=>'','class'=>'fancy brown')) }}
	{{ Form::file('file','',array('id'=>'','class'=>'brown img-upload')) }}
</div>