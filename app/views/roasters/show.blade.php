@extends('layouts.master')

@section('title', 'ROASTERS')

@section('content')
    <div class="container">
        <div class="col-xs-12 col-s-6">
            <h1>{{ $roaster->name }}</h1>
            <h2>{{ $roaster->overallRoasterScore() }} / 100</h2>
            <p>{{ $roaster->description }}</p>
        </div>
        <div class="col-xs-12 col-s-6">
            <img src="/img/fit750{{ $roaster->img_url }}" class="img-responsive">
        </div>
        <table class="table table-responsive">
            <th>Coffee</th>
            <th>Region</th>
            <th>Overall Rating</th>
            <th>Number of Reviews</th>
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