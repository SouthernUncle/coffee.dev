@extends('layouts.index')

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
<div>
<br><br><br><br>
    <table>
@foreach ($coffees as $c)
    <tr>
        <td>{{ $c->name }}</td>
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

