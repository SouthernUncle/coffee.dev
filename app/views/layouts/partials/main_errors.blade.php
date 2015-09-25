<div class="container">
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
</div>
    
@yield('content')
