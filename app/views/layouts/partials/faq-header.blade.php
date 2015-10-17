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
        <div class="intro-lead-in">It's a work in progress</div>
        <div class="intro-heading">Hope this helps!</div>
        <a href="#overview" class="page-scroll btn btn-xl">Find Out More</a>
    </div>
</div>