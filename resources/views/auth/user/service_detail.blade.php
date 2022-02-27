@extends('user.dashboard.user-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>My Services</h3>
                <div>
                    <a href="{{ route('admin.regions.create') }}" class="btn btn-primary">
                        Create Region
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">All Regions</h6>
            </div>

        </div>

    </div>
    <!-- ./ Content -->

@endsection

