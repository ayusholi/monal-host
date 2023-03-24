@include('layouts.header', ["services" => \App\Models\Service::take(5)->get()])

@yield('content')

@include('layouts.footer')
