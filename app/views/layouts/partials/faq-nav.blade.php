<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
    
        @include('layouts.partials.nav-sitename')

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
                @include('layouts.partials.nav-login')
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>