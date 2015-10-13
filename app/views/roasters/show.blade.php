@extends('layouts.master')

@section('title', 'ROASTERS')

@section('content')
    <div class="container">
        <div class="col-xs-12 col-s-6">
            <h1 class="display-inline">{{ $roaster->name }}</h1>
            <a href="{{ $roaster->url }}" target="_blank"><i class="fa fa-external-link fa-lg"></i></a>
            @if($roaster->overallRoasterScore() == 50)
                    <h2>No Coffees Yet Rated</h2>
            @else
                <h2>{{ $roaster->overallRoasterScore() }} / 100</h2>
            @endif

             @if(Auth::check())
            <a href="{{{ action('CoffeesController@createFromRoaster', $roaster->id) }}}">
                <button class="btn btn-awesome btn-lg">Create Coffee</button>
            </a>
            @endif
        </div>
            
        <div class="col-xs-12 col-s-6 col-md-6">
            <p>{{ $roaster->description }}</p>
        </div>
        <div class="col-xs-12 col-s-6 col-md-6">
            <img src="/img/fit750{{ $roaster->img_url }}" class="img-responsive">
            @if(Auth::check() && Auth::user()->role_id == 1)
                <a href="{{{ action('RoastersController@edit', $roaster->id) }}}">
                    <button class="btn btn-info">Edit</button>
                </a>
            @endif
        </div>
        <br>

        <table class="table table-responsive">
            <thead>
                <th>Coffee</th>
                <th>Region</th>
                <th>Overall Rating</th>
                <th>Number of Reviews</th>
            </thead>
            <tbody>
                @foreach ($coffees as $c)
                    <tr>
                        <td>{{ HTML::linkAction('CoffeesController@show', $c->name, array($c->id)) }}</td>
                        <td>{{ HTML::linkAction('RegionsController@show', $c->region->name, array($c->region->id)) }}</td>
                        @if(isset($c->reviews[0]))
                            <td>{{ $c->overallCoffeeRating() }}</td>
                        @else
                            <td>Not Yet Rated</td>
                        @endif
                        <td>{{ $c->reviews->count() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{ $coffees->links() }}</div>
    </div>
@stop

@section('js')
<script>
    "use strict";
    $(document).ready(function() {
        $("#roaster_nav").addClass("active");
    });
</script>
@stop