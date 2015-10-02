<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
    <link rel="stylesheet" type="text/css" href="/css/body.css">
</head>



<header>
	@include('layouts.partials.nav')
</header>

<body id="page-top" class="index" data-spy="scroll" data-target=".navbar" data-offset="50">

	@include('layouts.partials.main_errors')

	@include('layouts.partials.footer')

	@include('layouts.partials.script')
