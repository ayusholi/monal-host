@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Storages</h3>
                <div>
                    <a href="{{ route('admin.storages.create') }}" class="btn btn-primary">
                        Create Storage
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">All Storages</h6>
            </div>
            <div class="table-responsive">
                <table id="recent-orders" class="table table-lg">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Total Storage</th>
                        <th>Storage Type</th>
                        <th>Price</th>
                        <th>Total Services</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($storages as $storage)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $storage->name }}</td>
                                <td>{{ $storage->latitude }}</td>
                                <td>{{ $storage->longitude }}</td>
                                <td></td>
                                <td class="text-right">
                                    <a href="{{ route('admin.storages.edit', ['storage' => $storage]) }}" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
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

