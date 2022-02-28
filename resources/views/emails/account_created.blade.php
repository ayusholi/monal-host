<h1>Hello {{ $full_name }},</h1>

<p>Your account has been created successfully! Thank you for joining Monalhost</p>
<h2>Welcome to the site {{$user['first_name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
<br/>
<a href="{{ route('auth.verify', $user->verifyUser->token) }}">Verify Email</a>
