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
                <h6 class="card-title mb-0 ml-4">{{ $customer->username}}</h6>
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
                <h6 class="card-title mb-0 mt-2">Contact Number: {{ $customer->contact_number?$customer->contact_number:'Number Missing' }}</h6>
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
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">User Services </h6>
            </div>
            <div class="card-body">
                <h5 class="font-weight-bold">Total Services: {{count($customerservices)}}</h5>
            </div>
            <div class="table-responsive">
                <table id="recent-orders" class="table table-lg">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Service Name</th>
                        <th>Service Interval</th>
                        <th>Operting System</th>
                        <th>Region</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($customerservices as $user_service)
                        {{-- {{dd($user_service)}} --}}
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user_service->user->full_name }}</td>
                                <td>{{ $user_service->user->email }}</td>
                                <td>{{ $user_service->service->name }}</td>
                                <td>{{ $user_service->service->interval }} {{ $user_service->service->interval_type }}</td>
                                <td>{{ $user_service->operatingSytem->name }} {{ $user_service->operatingSytem->version }}</td>
                                <td>{{ $user_service->region->name }}</td>
                                <td class="text-right">
                                    <a href="{{ route('admin.service.detail', ['customer_id' => $customer->id, 'user_service_id' => $user_service->id]) }}" class="btn btn-outline-primary" data-toggle="tooltip" title="View Detail">
                                        View Detail
                                    </a>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ./ Content -->

@endsection

