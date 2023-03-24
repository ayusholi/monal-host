@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Customers</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">All Customers</h6>
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
                        <th>Amount</th>
                        <th>Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($processing_services as $user_service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user_service->user->full_name }}</td>
                                <td>{{ $user_service->user->email }}</td>
                                <td>{{ $user_service->service->name }}</td>
                                <td>{{ $user_service->service->interval }} {{ $user_service->service->interval_type }}</td>
                                <td>{{ $user_service->operatingSytem->name }} {{ $user_service->operatingSytem->version }}</td>
                                <td>{{ $user_service->region->name }}</td>
                                <td>{{ $user_service->payment->total_amount }}</td>
                                <td>{{ $user_service->status }}</td>
                                <td class="text-right">
                                    <a href="{{ route('admin.customer.detail', ['customer_id' => $customer->id]) }}" class="btn btn-outline-primary" data-toggle="tooltip" title="View Detail">
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

