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
<div>
    <h1>{{ $region->name }}</h1>
    <p>{{ $region->description }}</p>
    <img src="https://maps.googleapis.com/maps/api/staticmap?center={{ $region->name }}&zoom=13&size=600x300&maptype=roadmap&key=AIzaSyDAySxaq2FF-SkNhPq14sng77oo0ay_DiY">
</div>
@stop

@section('js')
<script>
// You need to have the script tags in here.
</script>
@stop