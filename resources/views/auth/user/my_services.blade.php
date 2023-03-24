@extends('user.dashboard.user-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>My Services</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">All Active Services</h6>
            </div>
            <div class="table-responsive">
                <table id="recent-orders" class="table table-lg">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Service Name</th>
                        <th>Region</th>
                        <th>Storage</th>
                        <th>Operating System</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Starts at</th>
                        <th>Ends at</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->service->name }}</td>
                                <td>{{ $service->region->name }}</td>
                                <td>{{ $service->storage }} {{ $service->storage_unit }} {{ $service->storage_type }}</td>
                                <td>{{ $service->operatingSytem->name }}</td>
                                <td>{{ ucfirst($service->status) }}</td>
                                <td>{{ $service->payment->transaction_method}}</td>
                                <td>{{ $service->starts_from ?? "[Not Activated]" }}</td>
                                <td>{{ $service->expires_at ?? "[Not Activated]" }}</td>
                                <td class="text-right">
                                    <a href="{{ route('my.service.detail', ['id' => $service->id]) }}" class="btn btn-primary text-white" data-toggle="tooltip" title="View">
                                        View
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

