<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | MonalHost</title>

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
    <img class="logo" src="https://baston.laborasyon.com/assets/media/image/logo/logo.png" alt="logo">
    <img class="dark-logo" src="https://baston.laborasyon.com/assets/media/image/logo/dark-logo.png" alt="logo dark">
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="https://baston.laborasyon.com/assets/media/image/logo/logo.png" alt="logo">
    </div>
    <!-- ./ logo -->


    <h5>Sign in</h5>

    @error('msg')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- form -->
    <form method="post" action="{{ route('auth.post.login') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between align-items-center">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1" name="remember_me">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a class="small" href="recovery-password.html">Reset password</a>
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>
        <hr>
        <p class="text-muted">Login with Google.</p>
        <ul class="list-inline">
            <a href="{{ route('auth.socialite', ['social' => 'google']) }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
            </a>
        </ul>
        <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="{{ route('auth.register') }}" class="btn btn-outline-light">Register now!</a>
    </form>
    <!-- ./ form -->


</div>

<!-- Plugin scripts -->
<script src="{{ asset('assets/vendor/bundle.js') }}"></script>

<!-- App scripts -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>
</body>

</html>
