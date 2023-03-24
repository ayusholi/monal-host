
<!doctype html>
<html lang="en">

<!-- Mirrored from baston.laborasyon.com/demos/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 08:56:25 GMT -->
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


    <h5>Create account</h5>

    <!-- form -->
    <form method="post" action="{{ route('auth.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="first_name" placeholder="First Name" required autofocus value="{{ old('first_name') }}">
            @error('first_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" value="{{ old('middle_name') }}">
            @error('middle_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required value="{{ old('last_name') }}">
            @error('last_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="username" required value="{{ old('username') }}">
            @error('username')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required value="{{ old('email') }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contact_number" placeholder="Contact Number" required value="{{ old('contact_number') }}">
            @error('contact_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Retype Password" required>
        </div>
        <button class="btn btn-primary btn-block">Register</button>
        <hr>
        <p class="text-muted">Already have an account?</p>
        <a href="{{ route('auth.login') }}" class="btn btn-outline-light">Sign In</a>
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
