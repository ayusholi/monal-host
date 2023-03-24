@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Service</h3>
                <div>
                    <a href="{{ route('admin.vps-services.create') }}" class="btn btn-primary">
                        Create Service
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">All Services</h6>
            </div>
            <div class="table-responsive">
                <table id="recent-orders" class="table table-lg">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>RAM</th>
                        <th>RAM Type</th>
                        <th>CPU Cores</th>
                        <th>Interval</th>
                        <th>Base Price</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->vpsService->ram . ' ' . $service->vpsService->ram_type }}</td>
                                <td>{{ $service->vpsService->cpu_cores }}</td>
                                <td>{{ $service->interval . ' ' . $service->interval_type }}</td>
                                <td>{{ $service->base_price }}</td>
                                <td></td>
                                <td class="text-right">
                                    <a href="{{ route('admin.vps-services.edit', ['vps_service' => $service]) }}" class="btn btn-outline-primary btn-sm btn-floating text-primary" data-toggle="tooltip" title="Edit">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.vps-services.destroy', ['vps_service' => $service]) }}" method="POST" style="display: inline-block;">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm btn-floating ml-2 text-warning" type="submit"><i class="fa-solid fa-trash"></i></button>
                                    </form>
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

