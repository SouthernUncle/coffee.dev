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
<div class="container">
<br><br><br><br>
    <table>
@foreach ($roasters as $r)
    <tr>
        <td>{{ $r->name }}</td>
        <td>{{ $r->city . ", " . $r->state }}</td>
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

