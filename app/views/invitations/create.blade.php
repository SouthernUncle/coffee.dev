@extends('layouts.master')

@section('title', 'Invite')

@section('content')
<section>
    <div class="container">
        <div class="col-xs-12">
            <h1>Invite a Friend</h1>
        </div>
        {{ Form::open(array('action' => 'InvitationsController@emailInvite')) }}
            <div class="col-xs-12 col-md-6">
                {{ Form::label('name', 'Name', ['class' => 'fancy brown invite-label']) }}
                {{ Form::text('name', null, ['class' => 'form-control', 'autofocus']) }}
            </div>
            <div class="col-xs-12 col-md-6">
                {{ Form::label('email', 'Email', ['class' => 'fancy brown invite-label']) }}
                {{ Form::email('email', null, ['class' => 'form-control']) }}
            </div>

            <div class="col-xs-12">
                <button class="btn btn-info invite-btn">Send Invite</button>
            </div>

        {{ Form::close() }}    
    </div>
</section>
@stop

@section('js')
    <script>
        $("#user_nav").addClass("active");
        $("#invite_nav").html("Invite");
    </script>
@stop