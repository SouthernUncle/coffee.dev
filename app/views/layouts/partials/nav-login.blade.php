@if(!Auth::check())
<li  id="user_nav">
    <a class="page-scroll" id="new_user_nav" href="{{{ action('HomeController@showLogin') }}}">Log In</a>
</li>
@else
<li id="user_nav">
    <a class="page-scroll" href="{{{ action('UsersController@show', Auth::user()->username) }}}">
        <i class="fa fa-user"></i>
        Account
    </a>
</li>
<li id="create_nav">
    <a href="{{{ action('ReviewsController@create') }}}" class="page-scroll" id="add_nav"> 
        Add
        <i class="fa fa-plus"></i>
    </a>
</li>
@endif