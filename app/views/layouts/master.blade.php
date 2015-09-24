<!doctype html>
<html lang="en">
<head>
    @include('layouts.partials.head')
    {{ HTML::style('/assets/stylesheets/colors.css') }}
</head>
<body ng-app="blog">

    @include('layouts.partials.nav')
    
    @include('layouts.partials.header')

    @include('layouts.partials.main_errors')

    @include('layouts.partials.footer')

    @include('layouts.partials.script')

</body>
</html>