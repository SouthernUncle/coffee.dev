@extends('layouts.master')

@section('title', 'Edit Profile')

@section('style')
    <link rel="stylesheet" type="text/css" href="/css/form.css">
    <link rel="stylesheet" type="text/css" href="/css/create-review.css">
@stop

@section('content')
    <div class="container">
        {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-sm-6 col-md-6">
                {{ Form::label('username', 'Username', ['class' => 'fancy']) }}
                {{ Form::text('username', null, 
                    [
                        'class'       => 'form-control brown',
                        'placeholder' => 'Username',
                        'value'       => '{{{ Input::old("username") }}}'
                    ])
                }}
                </div>
                <div class="col-sm-6 col-md-6">
                {{ Form::label('email', 'Email', ['class' => 'fancy']) }}
                {{ Form::email('email', null, 
                    [
                        'class'       => 'form-control brown', 
                        'placeholder' => 'Email',
                        'value'       => '{{{ Input::old("email") }}}'
                    ])
                }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    {{ Form::label('password', 'New Password', ['class' => 'fancy']) }}
                    {{ Form::password('newPass', ['class' => 'form-control brown']) }}
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    {{ Form::label('password', 'Confirm New Password', ['class' => 'fancy']) }}
                    {{ Form::password('newPassConfirm', ['class' => 'form-control brown']) }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 center-it">
                <h3>Using these 3 measures, map out your ideal cup of coffee.</h3>
            </div>
            <div class="col-xs-12 col-s-6">
                <span class="slider-title fancy center-it">Roast</span>
                <input id="roast_pref" name="roast_pref" data-slider-id='roast_pref' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
            </div>
            <div class="col-xs-12 col-s-6">
                <span class="slider-title fancy center-it">Body</span>
                <input id="body_pref" name="body_pref" data-slider-id='body_pref' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
            </div>
            <div class="col-xs-12 col-s-6">
                <span class="slider-title fancy center-it">Acidity</span>
                <input id="acid_pref" name="acid_pref" data-slider-id='acid_pref' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-6 col-sm-6 col-md-6 col-xs-offset-3">
                        {{ Form::label('password', 'Password (required)', ['class' => 'fancy']) }}
                        {{ Form::password('password', ['class' => 'form-control brown']) }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <button class="btn btn-default">Submit</button>
            </div>
        {{ Form::close() }}
    </div>
@stop

@section('js')
<script>
    "use strict";
    $(document).ready(function() {
        $("#user_nav").addClass("active");
        $("#edit_user_nav").text("Edit Account");
    });
</script>
<script src="/js/user-sliders.js"></script>
@stop