
<!doctype html>
<html lang="en">

<!-- Mirrored from baston.laborasyon.com/demos/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 08:56:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baston - Responsive Admin Dashboard Template</title>

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


    <h5>Sign in</h5>

    @error('msg')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- form -->
    <form method="post" action="{{ route('auth.login') }}">
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
        <p class="text-muted">Login with your social media account.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-google">
                    <i class="fa fa-google"></i>
                </a>
            </li>
        </ul>
        <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="register.html" class="btn btn-outline-light">Register now!</a>
    </form>
    <!-- ./ form -->


</div>

<!-- Plugin scripts -->
<script src="https://baston.laborasyon.com/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="https://baston.laborasyon.com/assets/js/app.min.js"></script>
</body>

<!-- Mirrored from baston.laborasyon.com/demos/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 08:56:25 GMT -->
</html>
