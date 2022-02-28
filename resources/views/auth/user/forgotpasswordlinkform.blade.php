
<!doctype html>
<html lang="en">

<!-- Mirrored from baston.laborasyon.com/demos/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 08:56:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Link</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://baston.laborasyon.com/assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="https://baston.laborasyon.com/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="https://baston.laborasyon.com/assets/css/app.min.css" type="text/css">
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


    <h5>Reset Password</h5>

    @if(Session::has('error'))
    <div class="alert alert-danger alert-with-border" role="alert">{{Session::get('error')}}</div>
    @endif
    <!-- form -->
    <form method="post" action="{{ route('auth.resetpassword') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" >
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Retype Password" >
            @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
        <button class="btn btn-primary btn-block">Reset Password</button>
    </form>
    <!-- ./ form -->


</div>

<!-- Plugin scripts -->
<script src="https://baston.laborasyon.com/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="https://baston.laborasyon.com/assets/js/app.min.js"></script>
</body>

<!-- Mirrored from baston.laborasyon.com/demos/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 08:56:25 GMT -->
</html>
