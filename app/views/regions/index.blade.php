
@extends('layouts.index')

@section('title', 'REGIONS')

@section('header')
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		        <div class="intro-text" id="forceUp">
		            <div class="intro-lead-in">Welcome To Our Studio!</div>
		            <div class="intro-heading">It's Nice To Meet You</div>
		            <a href="" class="page-scroll btn btn-xl">Tell Me More</a>
		        </div>
	        </div>
	    </div>
    </div>
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