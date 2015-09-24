<hr class="featurette-divider">

<footer class="footer-container container">
    <div class="row">
        <div class="col-xs-4">
            <a href="#" class="grey"></span>Back to top</a>
        </div>
        
        <div class="col-xs-4">
            <p class="squeeze text-center">
                <a href=""><span class="fa fa-github-square fa-2x grey"></span></a>
                <a href=""><span class="fa fa-linkedin-square fa-2x grey"></span></a>
                <a href=""><span class="fa fa-instagram fa-2x grey"></span></a>
            </p>
        </div>

        <div class="col-xs-4 text-right">
            @if(!Auth::check())
                <p class="squeeze grey">
                    <a href="{{ action('HomeController@showLogin')}}" class="grey">
                        Log In
                    </a>
                </p>
            @else 
                <p class="squeeze grey">
                    <a href="{{ action('HomeController@doLogout')}}" class="grey">
                        Log Out
                    </a>
                </p>
            @endif
        </div>
    </div>
</footer>