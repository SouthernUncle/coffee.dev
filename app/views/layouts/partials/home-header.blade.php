<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
        	@if (Session::has('successMessage'))
		        <div class="alert alert-success messages">{{{ Session::get('successMessage') }}}</div>
		    @endif
		    @if (Session::has('errorMessage'))
		        <div class="alert alert-danger messages">{{{ Session::get('errorMessage') }}}</div>
		    @endif

		    @if($errors->has())
		        @foreach($errors->all() as $error)
		            <p class="errors alert alert-danger" role="alert">{{{ $error }}}</p>
		        @endforeach
		    @endif
            <div class="intro-lead-in">Welcome To Bean Rate!</div>
            <div class="intro-heading">We're Happy You're Here</div>
            <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
        </div>
    </div>
	    
</header>