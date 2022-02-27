@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Customer</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">{{ $customer->full_name }}</h6>
            </div>
            <div class="card-body">

            </div>
        </div>

    </div>
    <!-- ./ Content -->

@endsection

