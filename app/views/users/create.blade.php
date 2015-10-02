@extends('layouts.master')

@section('title')

@section('style')
<style>
/* You need to have the style tags in here. */
</style>
@stop

@section('content')
<section>
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
</section>
@stop

@section('js')
<script>
// You need to have the script tags in here.
</script>
@stop