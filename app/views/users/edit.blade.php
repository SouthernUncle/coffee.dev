@extends('layouts.master')

@section('title', 'Edit Profile')

@section('content')
    <div class="container">
        {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

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
        {{ Form::password('password', null, 
            [
                'class'       => 'form-control',
                'placeholder' => 'Old Password'
            ])
        }}
                
        {{ Form::label('password', 'New Password') }}
        {{ Form::password('newPass', null, 
            [
                'class'       => 'form-control', 
                'placeholder' => 'New Password',
            ])
        }}

        {{ Form::label('password', 'Confirm New Password') }}
        {{ Form::password('newPassConfirm', null, 
            [
                'class'       => 'form-control', 
                'placeholder' => 'Confirm New Password',
            ])
        }}
    <br>
    <h3>Using these 3 measures, map out your ideal cup of coffee.</h3>
        {{ Form::label('acid_pref', 'Acidity')}}
        {{ Form::selectRange('acid_pref', 1, 10) }}

        {{ Form::label('body_pref', 'Body')}}
        {{ Form::selectRange('body_pref', 1, 10) }}

        {{ Form::label('roast_pref', 'Roast')}}
        {{ Form::selectRange('roast_pref', 1, 10) }}
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
    });
</script>
@stop