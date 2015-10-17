@extends('layouts.master')

@section('title', 'Create Account')

@section('style')
    <link rel="stylesheet" type="text/css" href="/css/form.css">
    <link rel="stylesheet" type="text/css" href="/css/create-review.css">
@stop

@section('content')
    <div class="container">
        <div class="col-xs-12 col-md-12">
            <h1 class="yellow heading">Welcome</h1>
        </div>
        {{ Form::open(array('action' => 'UsersController@store', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'createUser')) }}

        <div class="col-xs-12 col-md-6">
            {{ Form::label('username', 'Username', ['class' => 'fancy']) }}
            {{ Form::text('username', null, 
                [
                    'class'       => 'form-control',
                    'placeholder' => 'Username',
                    'value'       => '{{{ Input::old("username")'
                ])
            }}
        </div>
        <div class="col-xs-12 col-md-6">
            {{ Form::label('email', 'Email', ['class' => 'fancy']) }}
            {{ Form::email('email', null, 
                [
                    'class'       => 'form-control', 
                    'placeholder' => 'Email',
                    'value'       => '{{{ Input::old("email")'
                ])
            }}
        </div>
        <div class="col-xs-12 col-md-6">
            {{ Form::label('password', 'Password', ['class' => 'fancy']) }}
            <div class="col-xs-12 col-md-12">
                {{ Form::password('password', ['class' => 'form-control'])}}
            </div>
        </div>          
        <div class="col-xs-12 col-md-6">      
            {{ Form::label('password', 'Confirm', ['class' => 'fancy']) }}
            <div class="col-xs-12 col-md-12">
                {{ Form::password('password_confirmation', ['class' => 'form-control'])}}
            </div>
        </div>
    <div class="col-xs-12 col-md-12 center-it">
    <h3>Using these 3 measures, map out your ideal cup of coffee.</h3>
    </div>
    <div class="col-xs-12 col-s-6">
        <span class="slider-title fancy">Roast</span>
        <input id="roast_pref" name="roast_pref" data-slider-id='roast_pref' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" @if(Input::old('roast_pref')) data-slider-value="{{ Input::old('roast_pref') }}" @else data-slider-value="5" @endif/>
    </div>
    <div class="col-xs-12 col-s-6">
        <span class="slider-title fancy">Body</span>
        <input id="body_pref" name="body_pref" data-slider-id='body_pref' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" @if(Input::old('body_pref')) data-slider-value="{{ Input::old('body_pref') }}" @else data-slider-value="5" @endif/>
    </div>
    <div class="col-xs-12 col-s-6">
        <span class="slider-title fancy">Acidity</span>
        <input id="acid_pref" name="acid_pref" data-slider-id='acid_pref' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" @if(Input::old('acid_pref')) data-slider-value="{{ Input::old('acid_pref') }}" @else data-slider-value="5" @endif/>
    </div>
    <br>
        <button class="btn btn-default">Submit</button>

    {{ Form::close() }}
    </div>
@stop

@section('js')
<script>
    "use strict";
    $(document).ready(function() {
        $("#user_nav").addClass("active");
        $("#new_user_nav").text("New User");
    });
</script>
<script src="/js/user-sliders.js"></script>
@stop