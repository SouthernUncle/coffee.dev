@extends('layouts.master')

@section('title', 'Create Account')

@section('style')
    <link rel="stylesheet" type="text/css" href="/css/form.css">
    <link rel="stylesheet" type="text/css" href="/css/create-review.css">
@stop

@section('content')
    <div class="container">
        {{ Form::open(array('action' => 'UsersController@store', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'createUser')) }}

        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, 
            [
                'class'       => 'form-control',
                'placeholder' => 'Username',
                'value'       => '{{{ Input::old("username")'
            ])
        }}

        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, 
            [
                'class'       => 'form-control', 
                'placeholder' => 'Email',
                'value'       => '{{{ Input::old("email")'
            ])
        }}

        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', null, ['class' => 'form-control'])}}
                
        {{ Form::label('password', 'Confirm') }}
        {{ Form::password('password_confirmation', null, ['class' => 'form-control'])}}
    <br>
    <h3>Using these 3 measures, map out your ideal cup of coffee.</h3>
    <div class="well col-xs-12 col-s-6">
        <span class="slider-title fancy">Roast</span>
        <input id="roast_pref" name="roast_pref" data-slider-id='roast_pref' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
    </div>
    <div class="well col-xs-12 col-s-6">
        <span class="slider-title fancy">Body</span>
        <input id="body_pref" name="body_pref" data-slider-id='body_pref' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
    </div>
    <div class="well col-xs-12 col-s-6">
        <span class="slider-title fancy">Acidity</span>
        <input id="acid_pref" name="acid_pref" data-slider-id='acid_pref' type="number" data-slider-min="0" data-slider-max="10" data-slider-step="0.5" data-slider-value="5"/>
    </div>
    <br>
        <button class="btn btn-default">Submit</button>

    {{ Form::close() }}
    </div>
@stop

@section('js')
<script>
    $('#acid_pref').slider({
        formatter: function(value) {
            switch (value) {
                case 0:
                    return 'Acidity: ' + value + ' (No Acid)';
                    break;
                case 1:
                    return 'Acidity: ' + value + ' ()';
                    break;
                case 2:
                    return 'Acidity: ' + value + ' ()';
                    break;
                case 3:
                    return 'Acidity: ' + value + ' ()';
                    break;
                case 4:
                    return 'Acidity: ' + value + ' ()';
                    break;
                case 5:
                    return 'Acidity: ' + value + ' ()';
                    break;
                case 6:
                    return 'Acidity: ' + value + ' ()';
                    break;
                case 7:
                    return 'Acidity: ' + value + ' ()';
                    break;
                case 8:
                    return 'Acidity: ' + value + ' ()';
                    break;
                case 9:
                    return 'Acidity: ' + value + ' ()';
                    break;
                case 10:
                    return 'Acidity: ' + value + ' ()';
                    break;
            }
            return 'Acidity: ' + value;
        }
    });
    $('#roast_pref').slider({
            formatter: function(value) {
                switch (value) {
                    case 0:
                        return 'Roast: ' + value + ' (Sour Peanuts)';
                        break;
                    case 2:
                        return 'Roast: ' + value + ' (Hay)';
                        break;
                    case 3:
                        return 'Roast: ' + value + ' (Grassy)';
                        break;
                    case 5:
                        return 'Roast: ' + value + ' (Balanced)';
                        break;
                    case 7:
                        return 'Roast: ' + value + ' (Toasty)';
                        break;
                    case 8:
                        return 'Roast: ' + value + ' (Roasty)';
                        break;
                    case 9:
                        return 'Roast: ' + value + ' (Burnt)';
                        break;
                    case 10:
                        return 'Roast: ' + value + ' (Tire Fire)';
                        break;
                    
                }
                return 'Roast: ' + value;
            }
        });

        $('#body_pref').slider({
            formatter: function(value) {
                switch (value) {
                    case 0:
                        return 'Body: ' + value + ' (Watery)';
                        break;
                    case 1:
                        return 'Body: ' + value + ' (Tea-like)';
                        break;
                    case 2:
                        return 'Body: ' + value + ' (Silky)';
                        break;
                    case 3:
                        return 'Body: ' + value + ' (Smooth)';
                        break;
                    case 4:
                        return 'Body: ' + value + ' (2% Milk)';
                        break;
                    case 5:
                        return 'Body: ' + value + ' (Balanced)';
                        break;
                    case 6:
                        return 'Body: ' + value + ' (Syrupy)';
                        break;
                    case 7:
                        return 'Body: ' + value + ' (Velvety)';
                        break;
                    case 8:
                        return 'Body: ' + value + ' (Chewy)';
                        break;
                    case 9:
                        return 'Body: ' + value + ' (Coating)';
                        break;
                    case 10:
                        return 'Body: ' + value + ' (Viscous)';
                        break;
                }
                return 'Body: ' + value;
            }
        });
</script>
@stop

@section('js')
<script>
    "use strict";
    $(document).ready(function() {
        $("#user_nav").addClass("active");
    });
</script>
@stop