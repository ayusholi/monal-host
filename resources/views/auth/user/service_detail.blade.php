@extends('user.dashboard.user-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>{{ $service->service->name }}</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">Name: {{ $service->service->name }}</h6>
                <h6 class="card-title mb-0">Region: {{ $service->region->name }}</h6>
                <h6 class="card-title mb-0">OS: {{ $service->operatingSystem->name }}</h6>
                <h6 class="card-title mb-0">Payment Status: {{ $service->payment->status }}</h6>
                <h6 class="card-title mb-0">Payment Method: {{ $service->payment->transaction_method }}</h6>
                <h6 class="card-title mb-0">Total Amount: {{ $service->payment->total_amount }}</h6>
            </div>

        </div>

    </div>
    <!-- ./ Content -->

@endsection

