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
            <div class="table-responsive">
                <table id="recent-orders" class="table table-lg">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Service Name</th>
                        <th>Region</th>
                        <th>Storage</th>
                        <th>Operating System</th>
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
                                <td>{{ $service->storage->name }}</td>
                                <td>{{ $service->operatingSytem->name }}</td>
                                <td>{{ $service->starts_from }}</td>
                                <td>{{ $service->expires_at }}</td>
                                <td>{{  }}</td>
                                <td class="text-right">
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

