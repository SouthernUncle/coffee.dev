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
<div class="wrapper">
	@include('layouts.partials.main_errors')
	<div class="push"></div>
</div>
	@include('layouts.partials.footer')

	@include('layouts.partials.script')
</body>
</html>
