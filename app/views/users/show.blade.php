@extends('layouts.master')

@section('title', 'My Profile')

@section('content')
    <div class="container">
        <div class="col-xs-12">
            <h1>{{ $user->username }}</h1>

            <table class="table table-responsive">
                <tr>
                    <td>Email</td>
                    <td>Roast Preference</td>
                    <td>Acid Preference</td>
                    <td>Body Preference</td>
                    @if($user->role_id != 1)
                        <td>Invites Remaining</td>
                    @else 
                        <td>Invites Sent</td>
                    @endif
                </tr>
                <tr>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roast_pref }}</td>
                    <td>{{ $user->acid_pref }}</td>
                    <td>{{ $user->body_pref }}</td>
                    @if($user->role_id != 1)
                        <td>{{ $remaining }}</td>
                    @else 
                        <td>{{ $adminSent }}</td>
                    @endif
                </tr>
            </table>
        </div>
        <div class="col-xs-12">
            <h4>{{ HTML::linkAction('UsersController@edit', 'Edit your user info', array($user->id)) }}</h4>

            <h4>{{ HTML::linkAction('InvitationsController@create', 'Invite friends') }}</h4>

            @if(Auth::user()->role_id == 1)
                <h4>{{ HTML::linkAction('RegionsController@create', 'Add a Region') }}</h4>                
            @endif
        </div>
        <div class="col-xs-12">
            <h4>My Reviews</h4>
            @foreach($reviews as $review)
                <div class="col-xs-6 col-md-4">
                    <a href="{{{ action('CoffeesController@show', $review->coffee->id) }}}" class="brown">
                        {{ $review->coffee->name }} by <span class="fancy">{{ $review->coffee->roaster->name }}</span>
                    </a>
                    <a href="{{{ action('ReviewsController@edit', $review->id) }}}">
                        <i class="fa fa-edit"></i>
                    </a>
                </div>
            @endforeach
        </div>
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