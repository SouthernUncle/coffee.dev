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
                    <a class="page-scroll" href="#services">Reviews</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Coffees</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">Team</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
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
                <li id="create_nav">
                    <a href="{{{ action('ReviewsController@create') }}}" class="page-scroll" id="add_nav"> 
                        Add
                        <i class="fa fa-plus"></i>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>