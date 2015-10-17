Hi {{ $username }},<br><br>

If you requested a link to reset your password, here it is:<br>
<a href="{{ action('HomeController@resetPassword', $hash) }}">Reset Password</a><br><br>

If you did not submit this request, you might consider making some new friends. In the meantime, rest assured that your account is safe and we won't change your password on you!<br><br>

Happy brewing,<br><br><br><br>

The guys at BeanRate