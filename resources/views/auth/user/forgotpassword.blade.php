<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot password | MonalHost</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://baston.laborasyon.com/assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    {{-- <link rel="stylesheet" href="https://baston.laborasyon.com/vendors/bundle.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bundle.css') }}" type="text/css">

    <!-- App styles -->
    {{-- <link rel="stylesheet" href="https://baston.laborasyon.com/assets/css/app.min.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

</head>
<body class="form-membership" style="background: url(https://baston.laborasyon.com/assets/media/image/image1.jpg)">
<!-- Preloader -->
<div class="preloader">
    <h1 class="text-white">Monalhost</h1>
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

<div class="form-wrapper">

   <!-- logo -->
   <div id="logo">
    <h1 class="text-white">Monalhost</h1>
</div>
<!-- ./ logo -->


<h5>Reset password</h5>
@if(Session::has('success'))
<div class="alert alert-info alert-with-border" role="alert">{{Session::get('success')}}</div>
@endif
<!-- form -->
<form action="{{route('auth.submitforgotpassword')}}" method="post">
    @csrf
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
      @error('email')
        <span class="text-danger">{{ $message}}</span>
      @enderror
    </div>
    <button class="btn btn-primary btn-block">Send Reset Link</button>
    <hr>
    <p class="text-muted">Take a different action.</p>
    <a href="{{route('auth.register')}}" class="btn btn-outline-light mr-1">Register now!</a>
    or
    <a href="{{route('auth.login')}}" class="btn btn-outline-light ml-1">Log In</a>
</form>
<!-- ./ form -->



</div>

<!-- Plugin scripts -->
<script src="{{ asset('assets/vendor/bundle.js') }}"></script>

<!-- App scripts -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>
</body>

</html>
