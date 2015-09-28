@extends('layouts.master')

@section('title')

@stop

@section('style')
<style>
/* You need to have the style tags in here. */
</style>
@stop

@section('heading')

@stop

@section('subheading')

@stop

@section('image_url')
''
@stop

@section('content')
<section>
    <div class="container">
        <h1>{{ $roaster->name }}</h1>
        <h2>{{ $roaster->overallRoasterScore() }} / 100</h2>
        <p>{{ $roaster->description }}</p>
        <img src="/img/{{ $roaster->img_url }}">
        @foreach ($roaster->coffees as $c)
            <h3>{{ HTML::linkAction('CoffeesController@show', $c->name, array($c->id)) }}</h3>
            <h5>{{ HTML::linkAction('RoastersController@show', $c->roaster->name, array($c->roaster->id)) }}</h5>

        @endforeach
    </div>
</section>
@stop

@section('js')
<script>
// You need to have the script tags in here.
</script>
@stop