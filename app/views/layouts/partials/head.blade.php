<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Add CSRF Token as a meta tag in your head -->
<meta name="csrf-token" content="{{{ csrf_token() }}}">

{{ HTML::style('/assets/stylesheets/bootstrap.min.css'); }}
{{ HTML::style('/assets/stylesheets/jquery-ui.css'); }}
{{ HTML::style('/assets/stylesheets/style.css') }}
{{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'); }}

<title>
    @yield('title')
</title>

    
@yield('style')