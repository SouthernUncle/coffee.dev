Hey {{ $name }},<br><br>

Somebody thinks that you'd be a great contributor to BeanRate.com!

To accept their invitation and create an account, click this link: <br><br>

<a href="{{ action('UsersController@create', $confirmation) }}">Create an Account!</a><br><br>
(Be careful, though, the invite expires as soon as you've clicked the link. You cannot go back.)<br><br>

If you haven't checked us out yet, do so first at <a href="{{ action('HomeController@showHome') }}">beanrate.com</a>!<br><br>

Thanks!