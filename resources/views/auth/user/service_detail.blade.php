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
                <h6 class="card-title mb-0">{{ $service->service->name }}</h6>
            </div>

        </div>

    </div>
    <!-- ./ Content -->

@endsection

