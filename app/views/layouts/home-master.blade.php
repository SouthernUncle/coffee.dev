<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>

<body id="page-top" class="index" data-spy="scroll" data-target=".navbar" data-offset="50">

    @include('layouts.partials.home-nav')
    
    @include('layouts.partials.home-header')

    @yield('content')

    @include('layouts.partials.script')

</body>
</html>