<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top nav-nothome">
    <div class="container">

        @include('layouts.partials.nav-sitename')
        
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

                @include('layouts.partials.nav-login')

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>