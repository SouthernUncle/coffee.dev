@extends('layouts.master')

@section('title')
Regions!
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
@foreach ($regions as $r)
    <tr>
        <td>{{ $r->name }}</td>
        <td>{{ $r->description }}</td>
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