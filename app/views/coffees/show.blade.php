@extends('layouts.master')

@section('title')
{{ $coffee->name }}
@stop

@section('content')
    <div class="container">
        <div class="col-xs-12 col-s-6 col-md-6">
            <h1 class="display-inline">
                {{ $coffee->name }}
            </h1>
            <a href="{{ $coffee->url }}" target="_blank"><i class="fa fa-external-link fa-lg"></i></a>
            @if(Auth::check())
            <a href="{{{ action('ReviewsController@createFromCoffee', $coffee->id) }}}">
                <button class="btn  btn-awesome review-btn btn-lg">Review</button>
            </a>
            @endif

            <h4>
                <a href="{{ action('RoastersController@show', $coffee->roaster->id) }}">{{ $coffee->roaster->name }}</a>
            </h4>
            <h4>
                @if(isset($reviews[0]))
                    {{ $coffee->overallCoffeeRating() }} / 10
                @else
                    Not Yet Rated
                @endif
            </h4>

            <h6>
                {{ $coffee->region->name }}
            </h6>        
        
            <p>
                {{ $coffee->roasters_description }}
            </p>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <img src="/img/fit500{{ $coffee->img_url }}" class="img img-responsive">
            @if(Auth::check() && Auth::user()->role_id == 1)
                <a href="{{{ action('CoffeesController@edit', $coffee->id) }}}">
                    <button class="btn btn-info">Edit</button>
                </a>
            @endif        
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            @if(isset($reviews[0]))<h2>Reviews:</h2>@endif
            @foreach ($reviews as $r)
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <div class="panel-title">
                                   <h4><span id="overall">{{ $r->weightedScore() }}</span>/10 {{ $r->user->username }}</h4><span>Deviation: {{ $r->ratingsDev() }} %</span>
                                   <p>Aroma: {{ $r->aroma }} | Flavor: {{ $r->flavor }} | Aftertaste: {{ $r->aftertaste }} | Balance: {{ $r->balance }}</p>
                                   <p>Roast: {{ $r->roast }} | Body: {{ $r->body }} | Acidity: {{ $r->acidity }}</p>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p>{{ $r->review }}</p>
                        </div>
                        @if($r->parameter)
                        <?php $p = $r->parameter ?>
                        <hr>
                        <div class="panel-body">
                            <p>
                                @if ($p->grind && ($p->water_weight || $p->coffee_weight || $p->brew_time))
                                    Grind: {{ $p->grind }} |
                                @elseif($p->grind)
                                    Grind: {{ $p->grind }} 
                                @endif
                                @if ($p->water_weight)
                                    Water: {{ $p->water_weight }} g |
                                @endif
                                @if ($p->coffee_weight)
                                    Coffee: {{ $p->coffee_weight }} g |
                                @endif
                                @if ($p->coffee_weight && $p->water_weight)
                                    Ratio: {{ $p->ratio() }}:1 |
                                @endif
                                @if ($p->brew_time)
                                    Brew Time: {{ $p->brew_time }} seconds
                                @endif
                                @if ($p->water_temp && ($p->brew_time || $p->coffee_weight || $p->water_weight))
                                    | Water Temp: {{ $p->water_temp }} &deg;F
                                @elseif($p->water_temp)
                                    Water Temp: {{ $p->water_temp }} &deg;F
                                @endif
                            </p>
                            <p>
                                @if ($p->brewer)
                                    Brewer: {{ $p->brewer }}
                                @endif
                                @if ($p->method && $p->brewer)
                                    | Method: {{ $p->method }} 
                                @elseif($p->method)
                                    Method: {{ $p->method }}
                                @endif
                            </p>
                            <p>
                                @if ($p->roast_date)
                                    Roast Date: {{ Coffee::convertDate($p->roast_date) }}
                                @endif
                            </p>
                        </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
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
@stop

