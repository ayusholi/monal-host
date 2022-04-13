@push ('name')

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
                    <h6 class="card-title mb-0">All Available Services</h6>
                </div>
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-lg">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Service Name</th>
                            <th>Service Type</th>
                            <th>Interval</th>
                            <th>Storage</th>
                            <th class="text-right">View</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ ucfirst($service->service_type) }}</td>
                                    @if($service->service_type == "vps")
                                        <td>{{ $service->vpsService->storage }} {{ $service->vpsService->storage_unit }} {{ $service->vpsService->storage_type }}</td>
                                    @else
                                        <td>{{ $service->emailService->storage }} {{ $service->emailService->storage_unit }}</td>
                                    @endif
                                    <td>{{ $service->interval }} {{ $service->interval_type }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('service.detail', ['slug' => $service->slug]) }}" target="_blank" class="btn btn-primary text-white" data-toggle="tooltip" title="View">
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


@endpush
