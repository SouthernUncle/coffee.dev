<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Bean Rate</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#overview">Overview</a>
                </li>
                <li>
                    <a class="page-scroll" href="#account">Account</a>
                </li>
                <li>
                    <a class="page-scroll" href="#reviews">Reviews</a>
                </li>
                <li>
                    <a class="page-scroll" href="#content">New Content</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                @if(!Auth::check())
                <li>
                    <a class="page-scroll" href="{{{ action('HomeController@showLogin') }}}">Log In</a>
                </li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                        <i class="fa fa-key"></i>
                    </a>
                    <ul class="dropdown-menu nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="{{{ action('UsersController@show', Auth::id()) }}}">Profile</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{{ action('HomeController@doLogout') }}}">Log Out</a>
                        </li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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