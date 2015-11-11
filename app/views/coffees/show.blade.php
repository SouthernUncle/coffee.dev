@extends('layouts.master')

@section('title')
    {{ $coffee->name }}
@stop

@section('content')
    <div class="container">
        <div class="col-xs-12 col-s-6 col-md-6">
            <a href="{{ $coffee->url }}" target="_blank" class="brown">
                <h1 class="display-inline">
                    {{ $coffee->name }}
                </h1>
            </a>
            @if(Auth::check())
            <a href="{{{ action('ReviewsController@createFromCoffee', $coffee->url_name) }}}">
                <button class="btn btn-awesome review-btn btn-md">Review</button>
            </a>
            @endif

            <h4>
                <a href="{{ action('RoastersController@show', $coffee->roaster->url_name) }}" class="brown">
                    {{ $coffee->roaster->name }}
                </a>
            </h4>
            <h3>
                @if(isset($reviews[0]))
                    {{ $coffee->overallCoffeeRating() }} / 10
                @else
                    Not Yet Rated
                @endif
            </h3>

            <h6>{{ $coffee->region->name }} @if(!is_null($coffee->elevation)) | {{ $coffee->elevation }} @endif</h6>

            <h6>
                @if(!is_null($coffee->process)) {{ $coffee->process }} @endif  {{ $coffee->getPriceAvg($coffee->id) }}
            </h6>
                    
            <p>{{ $coffee->roasters_description }}</p>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <img src="/img/fit500{{ $coffee->img_url }}" class="img img-responsive">
            @if(Auth::check() && Auth::user()->role_id == 1)
                <a href="{{{ action('CoffeesController@edit', $coffee->url_name) }}}">
                    <button class="btn btn-info">Edit</button>
                </a>
            @endif        
        </div>
        
        @include('layouts.partials.coffee-review')

        <div>{{ $reviews->links() }}</div>
    </div>
@stop

@section('js')
<script>
    "use strict";
    $(document).ready(function() {
        $("#coffee_nav").addClass("active");
    });
</script>
<script src="/js/delete.js"></script>
@stop

