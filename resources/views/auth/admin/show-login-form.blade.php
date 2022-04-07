
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


    <h5>Sign in</h5>

    @error('msg')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- form -->
    <form method="POST" action="{{ route('admin.login') }}">
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
            <a class="small" href="{{ route('forgot.password') }}">Reset password</a>
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>
        <hr>
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
