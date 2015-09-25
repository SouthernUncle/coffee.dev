@extends('layouts.master')

@section('title')
{{ $coffee->name }}
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
        <h1><a href="{{ $coffee->url }}">{{ $coffee->name }}</a></h1>
        <h4><a href="{{ $coffee->roaster->url }}">{{ $coffee->roaster->name }}</a></h4>
        <h6>{{ $coffee->region->name }}</h6>
        <p>{{ $coffee->roasters_description }}</p>
        <img src="/img/{{ $coffee->img_url }}">
        <br>
        <h2>Reviews:</h2>
        @foreach ($coffee->reviews as $r)
            <h4>{{ $r->user->username }}</h4>
            <p>Aroma: {{ $r->aroma }}, Flavor: {{ $r->flavor }}, Aftertaste: {{ $r->aftertaste }}, Balance: {{ $r->balance }}</p>
            <p>Roast: {{ $r->roast }}, Body: {{ $r->body }}, Acidity: {{ $r->acidity }}</p>
            <p>{{ $r->review }}</p>
        @endforeach
    </div>
</section>
@stop

@section('js')
<script>
// You need to have the script tags in here.
</script>
@stop