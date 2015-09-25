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
                <a href="{{ $coffee->roaster->url }}">{{ $coffee->roaster->name }}</a>
            </h4>

            <h6>
                {{ $coffee->region->name }}
            </h6>

            <p>
                {{ $coffee->roasters_description }}
            </p>

            <img src="/img/{{ $coffee->img_url }}">
            <br>

            <h2>Reviews:</h2>
                @foreach ($coffee->reviews as $r)
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <div class="panel-title">
                                       <h4><span id="overall">9.5</span>/10 {{ $r->user->username }}</h4>
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
                                    @if ($p->brew_time)
                                        Brew Time: {{ $p->brew_time }} seconds
                                    @endif
                                    @if ($p->water_temp)
                                        | Water Temp: {{ $p->water_temp }} &deg;F
                                    @endif
                                </p>
                                <p>
                                    @if ($p->method)
                                        Method: {{ $p->method }}
                                    @endif
                                </p>
                                <p>
                                    @if ($p->roast_date)
                                        Roast Date: {{ $p->roast_date }}
                                    @endif
                                </p>
                            </div>
                            @endif
                        </div>
                    </div>
                @endforeach
        </div>
    </section>
@stop

