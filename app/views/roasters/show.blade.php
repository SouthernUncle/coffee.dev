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
        <img src="/img/fit750{{ $roaster->img_url }}" class="img-responsive">
        <table class="table table-responsive">
            <th>Coffee</th>
            <th>Region</th>
            <th>Overall Rating</th>
            <th>Number of Reviews</th>
        @foreach ($coffees as $c)
        <tr>
            <td>{{ HTML::linkAction('CoffeesController@show', $c->name, array($c->id)) }}</td>
            <td>{{ HTML::linkAction('RegionsController@show', $c->region->name, array($c->region->id)) }}</td>
            <td>{{ $c->overallCoffeeRating() }}</td>
            <td>{{ $c->reviews->count() }}</td>
        </tr>
        @endforeach
        </table>
        <div>{{ $coffees->links() }}</div>
    </div>
</section>
@stop

@section('js')
<script>
// You need to have the script tags in here.
</script>
@stop