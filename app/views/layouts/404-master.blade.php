<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
    <link rel="stylesheet" type="text/css" href="/css/404.css">
</head>

<body id="page-top" class="index" data-spy="scroll" data-target=".navbar" data-offset="50">

    @include('layouts.partials.home-nav')
    
    @include('layouts.partials.404-header')

    @yield('content')

    @include('layouts.partials.script')

</body>
</html>