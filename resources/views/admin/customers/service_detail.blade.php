@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>{{ $customer->full_name }}</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0 ml-4">{{ $user_service->service->name}}</h6>
            </div>
            {{-- {{dd($customer)}} --}}

            <div class="card-body">
                <div class="card-header">
                <h6 class="card-title mb-2">Full Name: {{ $customer->first_name}} {{ $customer->middle_name?$customer->middle_name:'' }} {{ $customer->last_name}}</h6>
                </div>
                {{-- <div class="card-header">
                <h6 class="card-title mb-0 mt-2">Middle Name: {{ $customer->middle_name }}</h6>
                </div> --}}
                <div class="card-header">
                <h6 class="card-title mb-0 mt-2">Email: {{ $customer->email }}</h6>
                </div>
                @if($customer->email_verified_at==null)
                <div class="card-header">
                    <h6 class="card-title mb-0 mt-2">Email Verified: Not Verified</h6>
                    </div>
                @else
                <div class="card-header">
                    <h6 class="card-title mb-0 mt-2">Email Verified: Verified</h6>
                    </div>
                @endif
                <div class="card-header">
                <h6 class="card-title mb-0 mt-2">Contact Number: {{ $customer->contact_number ? $customer->contact_number : 'Number Missing' }}</h6>
                </div>
                @if($customer->provider && $customer->provider_id =!null)
                <div class="card-header">
                <h6 class="card-title mb-0 mt-2">Login with: Google  Account</h6>
                </div>
                @else
                <div class="card-header">
                <h6 class="card-title mb-0 mt-2">Login with: User Account</h6>
                </div>
                @endif

                <div class="card-header">
                    @if($user_service->status == "cancelled")
                    <p>Service Cancelled</p>
                    @elseif($user_service->status == "on_process")
                        <a href="{{ route('admin.service.credential', ['customer_id' => $customer->id, 'user_service_id' => $user_service->id]) }}" class="btn btn-info text-white">Activate Service</a>
                    @else
                        <a href="{{ route('admin.service.credential', ['customer_id' => $customer->id, 'user_service_id' => $user_service->id]) }}" class="btn btn-info text-white">Update Credentials</a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- ./ Content -->

@endsection

