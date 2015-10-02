@extends('layouts.master')

@section('title', 'My Profile')

@section('content')
    <div class="container">
        <h1>{{ $user->username }}</h1>

        <table>
            <tr>
                <td>Email</td>
                <td>Roast Preference</td>
                <td>Acid Preference</td>
                <td>Body Preference</td>
            </tr>
            <tr>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roast_pref }}</td>
                <td>{{ $user->acid_pref }}</td>
                <td>{{ $user->body_pref }}</td>
            </tr>
        </table>
        <div>
            {{ HTML::linkAction('UsersController@edit', 'Edit your user info', array($user->id)) }}
        </div>
    </div>
@stop