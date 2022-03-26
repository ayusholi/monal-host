<h1>Hello {{ $user->full_name }},</h1>

<p>Your service has been activated successfully. Please Find the credentials below in the email. In case of any issues please contact us.</p>
<h2>Service: {{ $service->name }}</h2>
<h2>RAM: {{ $service->ram }} {{ $service->ram_unit }}</h2>
<h2>CPU Cores: {{ $service->cpu_cores }}</h2>
<h2>Storage: {{ $service->storage }} {{ $service->storage_unit }} {{ $service->storage_type }}</h2>
<h2>Interval: {{ $service->interval }} {{ $service->interval_type }}</h2>
<p>{{ $credentials }}</p>
<br/>
<br/>
<p><i>* Do not share your credentials with anyone else. In case you want to change the credentials please contact us</i></p>
