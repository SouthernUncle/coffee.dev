@extends('layouts.master')

@section('title')
{{ $coffee->name }}
@stop

@section('content')
    <section>
        <div class="container">
            <h1>
                <a href="{{ $coffee->url }}">{{ $coffee->name }}</a>
            </h1>

            <h4>
                <a href="{{ action('RoastersController@show', $coffee->roaster->id) }}">{{ $coffee->roaster->name }}</a>
            </h4>
            <h4>
                {{ $coffee->overallCoffeeRating() }} / 10
            </h4>
            <h6>
                {{ $coffee->region->name }}
            </h6>

            <p>
                {{ $coffee->roasters_description }}
            </p>

            <img src="/img/fit500{{ $coffee->img_url }}">
            <br>

            <h2>Reviews:</h2>
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
                                @if ($p->grind)
                                    Grind: {{ $p->grind }} |
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
                                @if ($p->water_temp)
                                    | Water Temp: {{ $p->water_temp }} &deg;F
                                @endif
                            </p>
                            <p>
                                @if ($p->brewer)
                                    Brewer: {{ $p->brewer }}
                                @endif
                                @if ($p->method)
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
            @if(Auth::id() == 1)
                <a href="{{{ action('CoffeesController@destroy', $coffee->id) }}}">
                    <button class="btn btn-info">Delete</button>
                </a>
            @endif
            <div>{{ $reviews->links() }}</div>
        </div>
    </section>
@stop

