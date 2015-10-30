@extends('layouts.master')

@section('title')
    {{{ $roaster->name }}}
@stop

@section('content')
    <div class="container">
        <div class="col-xs-12 col-s-6">
            <a href="{{ $roaster->url }}" target="_blank" class="brown">
                <h1 class="display-inline">{{ $roaster->name }}</h1>
            </a>
            <p>
                <a href="{{ $roaster->getMapLink($roaster->address, $roaster->city, $roaster->state) }}" target="_blank" class="brown">{{ $roaster->address }} {{ $roaster->city }}, {{ $roaster->state }}</a>
            </p>
            <a href="{{ $roaster->facebook }}" target="_blank"><i class="fa fa-facebook fa-2x brown roaster-icon"></i>  </a>
            <a href="{{ $roaster->twitter }}" target="_blank"><i class="fa fa-twitter fa-2x brown roaster-icon"></i>  </a>
            <a href="{{ $roaster->instagram }}" target="_blank"><i class="fa fa-instagram fa-2x brown roaster-icon"></i></a>
            @if($roaster->overallRoasterScore() == 50)
                    <h2>No Coffees Yet Rated</h2>
            @else
                <h2>{{ $roaster->overallRoasterScore() }} / 100</h2>
            @endif

             @if(Auth::check())
            <a href="{{{ action('CoffeesController@createFromRoaster', $roaster->url_name) }}}">
                <button class="btn btn-awesome btn-md">Create Coffee</button>
            </a>
            @endif
        </div>
            
        <div class="col-xs-12 col-s-6 col-md-6">
            <p>{{ $roaster->description }}</p>
        </div>
        <div class="col-xs-12 col-s-6 col-md-6" id="roaster-pic">
            <img src="/img/fit750{{ $roaster->img_url }}" class="img-responsive">
            @if(Auth::check() && Auth::user()->role_id == 1)
                <a href="{{{ action('RoastersController@edit', $roaster->url_name) }}}">
                    <button class="btn btn-info">Edit</button>
                </a>
            @endif
        </div>
        <br>

        <div class="col-xs-12">
            {{ Form::open(array('action' => array('RoastersController@show', $roaster->url_name), 'method' => 'get')) }}
                @include('layouts.partials.filter')
            {{ Form::close() }}
        </div>

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
                        <td>{{ HTML::linkAction('CoffeesController@show', $c->name, array($c->url_name)) }}</td>
                        <td>{{ HTML::linkAction('RegionsController@show', $c->region->name, array($c->region->url_name)) }}</td>
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
    </div>
@stop

@section('js')
    <script>
        "use strict";
        $(document).ready(function() {
            $("#roaster_nav").addClass("active");
        });
    </script>
    <script src="/js/livefilter.js"></script>
@stop