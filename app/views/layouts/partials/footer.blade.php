<hr class="featurette-divider">

<footer class="footer-container container">
    <div class="row">
        <div class="col-xs-4">
            <a href="#"><span class="glyphicon glyphicon-chevron-up"></span>Back to top</a>
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
                <p class="squeeze"><a href="/login">Login</a></p>
            @endif
        </div>
    </div>
</footer>