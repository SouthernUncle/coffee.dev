<link rel="stylesheet" type="text/css" href="/assets/stylesheets/header.css">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{{ action('HomeController@showHome') }}}">Coffee.dev</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="searchBar search">
                    {{ Form::open(array('action' => 'CoffeesController@index', 'method' => 'GET')) }}
                        <input type="text" class="form-control" id="searchBar" name="search" placeholder="Search for...">
                    {{ Form::close() }}
                </li>
                <li>
                    <a href="{{{ action('CoffeesController@index') }}}">Coffees</a>
                </li>
                <li>
                    <a href="{{{ action('RoastersController@index') }}}">Roasters</a>
                </li>
                <li>
                    <a href="{{{ action('RegionsController@index') }}}">Regions</a>
                </li>
                
                {{-- @if(Auth::check()) --}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add<span class="glyphicon glyphicon-plus"></span></a>
                    <ul class="dropdown-menu nav navbar-nav navbar-right">
                        <li>
                            <a href="{{{ action('CoffeesController@create') }}}">Coffee</a>
                        </li>

                        <li>
                            <a href="{{{ action('RoastersController@create') }}}">Roaster</a>
                        </li>
                    </ul>
                </li>
                {{-- @endif --}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
