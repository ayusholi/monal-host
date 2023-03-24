<p>Hello,</p>
<p>A New Ticket has been created by $user->full_name,</p>

<h1>{{ $title }}</h1>

{{ $body }}

<p>User Credentials</p>
<ul>
    <li>Full Name: {{ $user->full_name }}</li>
    <li>Email: {{ $user->email }}</li>
    <li>Contact Number: {{ $user->contact_number }}</li>
</ul>
