<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top nav-nothome">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="{{{ action('HomeController@showHome') }}}">Bean Rate</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li id="coffee_nav">
                    <a class="page-scroll" href="{{{ action('CoffeesController@index') }}}">Coffees</a>
                </li>
                <li id="roaster_nav">
                    <a class="page-scroll" href="{{{ action('RoastersController@index') }}}">Roasters</a>
                </li>
                <li id="region_nav">
                    <a class="page-scroll" href="{{{ action('RegionsController@index') }}}">Regions</a>
                </li>
                @if(!Auth::check())
                <li  id="user_nav">
                    <a class="page-scroll" id="new_user_nav" href="{{{ action('HomeController@showLogin') }}}">Log In</a>
                </li>
                @else
                <li id="user_nav">
                    <a class="page-scroll" href="{{{ action('UsersController@show', Auth::user()->username) }}}">
                        Account
                        <i class="fa fa-key"></i>
                    </a>
                </li>
                <li class="dropdown" id="create_nav">
                    <a href="#" class="dropdown-toggle" id="add_nav" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Add
                        <i class="fa fa-plus"></i>
                    </a>
                    <ul class="dropdown-menu nav navbar-nav navbar-right">
                        <li>
                            <a href="{{{ action('ReviewsController@create') }}}">Review</a>
                        </li>

                        <li>
                            <a href="{{{ action('CoffeesController@create') }}}">Coffee</a>
                        </li>
                    
                        <li>
                            <a href="{{{ action('RoastersController@create') }}}">Roaster</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>