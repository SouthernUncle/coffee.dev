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
            <a class="navbar-brand" href="/">Coffee.dev</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="searchBar">
                    {{ Form::open(array('action' => 'CoffeesController@index', 'method' => 'GET')) }}
                        <input type="text" class="form-control" id="searchBar" name="search" placeholder="Search for...">
                    {{ Form::close() }}
                </li>

                @if(Auth::check())
                <li>
                    <a href="{{{ action('UsersController@show', Auth::id()) }}}">
                        {{{ Auth::user()->username }}}
                    </a>
                </li>
                @else
                <li>
                    <a href="{{{ action('HomeController@showLogin') }}}">Log In</a>
                </li>
                @endif

                <li class="dropdown" id="wtf">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Misc.<span class="caret"></span></a>
                    <ul class="dropdown-menu nav navbar-nav navbar-right">
                        <li>
                            <a href="">About</a>
                        </li>

                        <li>
                            <a href="">Contact</a>
                        </li>
                    
                        <li>
                            <a href="">Games</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
