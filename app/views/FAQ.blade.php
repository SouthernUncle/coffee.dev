@extends('layouts.faq-master')

@section('title', 'FAQ')

@section('content')
	<div class="container">
		<section id="overview">
		<div class="col-xs-12">
			<h2 id="overview">Overview</h2>
			<div class="col-xs-12">
				<h4>What is Bean Rate?</h4>
					<p>A crowd-sourced, invitation-only coffee-review website. If you're a coffee nerd brewing at home or drinking the best brews your local shops have to offer, this is a place for YOUR voice to be heard.</p>
				<h4>How do I get an invite?</h4>
					<p>Head over to our <a href="{{ action('HomeController@showHome', '/#contact') }}">homepage</a> and fill out the contact form. Just be sure to select "Request an Invite" in the dropdown and we will shoot one your way! As soon as you click the invite URL, it will expire, so be sure to create your account before leaving the page.</p>
			</div>
		</div>
		</section>
		<section id="account">
		<div class="col-xs-12">
			<h2>Account</h2>
			<div class="col-xs-12">
				<h4>Is my information secure?</h4>
					<p>Yes. Your information is private and kept in a secure database. We will never divulge your information to any third party for any reason, unless required to do so by law. (No clue why that would happen, but figured it's better safe to say it than not?)</p>
				<h4>What's this preference thing?</h4>
					<p>We aspire to include new features in the near and distant future. One of these features involves comparing your ideal cup to each of your reviews and factoring that in to your score and therefore the overall coffee score. We're trying to quantify the subjective here, so we do what we can. Please use 5 as a 'balanced' metric, with 1 being the least amount of roast, body, or acidity and 10 being the most possible in a given cup. You can always edit these in your profile.</p>
				<h4>How do I edit my profile?</h4>
					<p>You can edit your profile when logged in under the Account tab, just select '<a href="{{ action('UsersController@show', Auth::user()->username) }}">Profile</a>'. Once on the profile page, you can then <a href="{{ action('UsersController@edit', Auth::user()->username) }}">edit</a> your account with a convenient link above your reviews. You can also invite other coffee nerds from your profile page.</p>
				<h4>Why do I only get 5 invites?</h4>
					<p>While the site is still a work in progress, there may be periodic bugs as Josh and I navigate our way through keeping our first multi-user site in production. We're going to try hard to keep improving UI/UX, and bring new visuals and features to the site. In doing so, we may break it and don't want to let a ton of people down. TL;DR: We want to keep it small while we're tweaking things. Once we've got it down, we'll open it up. For now, <a href="{{ action('HomeController@showHome', '/#contact') }}">send us an email</a> if you need more invites, we'll be happy to help you out.</p>
			</div>
		</div>
		</section>
		<section id="reviews">
		<div class="col-xs-12">
			<h2>Reviews</h2>
			<div class="col-xs-12">
				<h4>How do I create a review?</h4>
					<p>Head to the coffee index page and search for your coffee there. Or, click the 'Add+' link in the navbar, and select '<a href="{{ action('ReviewsController@create') }}">Review</a>'.</p>
				<h4>How do I edit a review?</h4>
					<p>Head to your <a href="{{ action('UsersController@show', Auth::user()->username) }}">profile</a> page and click the edit icon next to the coffee listed under 'My Reviews'.</p>
			</div>
		</div>
		</section>
		<section id="content">
		<div class="col-xs-12">
			<h2>Creating Content</h2>
			<div class="col-xs-12">
				<h4>The roaster and/or coffee I want to rate isn't on here. What should I do?</h4>
					<p>In the navbar click 'Add+', then on the following page select 
					'<a href="{{ action('CoffeesController@create') }}">Add New Coffee</a>' or '<a href="{{ action('RoastersController@create') }}">Add New Roaster</a>'. Alternatively, you can access those from the <a href="{{ action('CoffeesController@index') }}">Coffee Index</a>, <a href="{{ action('RoastersController@index') }}">Roaster Index</a>, or Roaster Show pages.  After creating a roaster, you will automatically be prompted to create a coffee. And after creating a coffee, you will be prompted to create a review. Please do so! It will help keep the site full of useful data, rather than empty pages.</p>
				<h4>Have a different question</h4>
					<p>Send us an email! We'll respond directly to you and if we think it's a system-wide thing, we'll address it here as well.</p>
			</div>
		</div>
		</section>
	</div>
@stop