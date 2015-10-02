@extends('layouts.master')

@section('title')

@stop

@section('style')
<style>
/* You need to have the style tags in here. */
</style>
@stop

@section('heading')

@stop

@section('subheading')

@stop

@section('image_url')
''
@stop

@section('content')
<section>
    <div class="container">
        <h1>Invite a Friend</h1>
        {{ Form::open(array('action' => 'InvitationsController@emailInvite')) }}
    
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}

            <button class="btn btn-default">Save</button>

        {{ Form::close() }}    
    </div>
</section>
@stop