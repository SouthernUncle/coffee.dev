@extends('layouts.master')

@section('title')
Coffees!
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
<div class="container">
<br><br><br><br>
    <table>
@foreach ($coffees as $c)
    <tr>
        <td><a href="/coffees/{{ $c->id }}">{{ $c->name }}</a></td>
        <td>{{ $c->region->name }}</td>
        <td>{{ $c->roaster->name }}</td>
        <td>{{ $c->roasters_description }}</td>
    </tr>
@endforeach
    </table>

</div>
@stop

@section('js')
<script>
// You need to have the script tags in here.
</script>
@stop

