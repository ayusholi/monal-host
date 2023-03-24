@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Operating System</h3>
                <div>
                    <a href="{{ route('admin.operating-systems.create') }}" class="btn btn-primary">
                        Create Operating System
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">All Operating System</h6>
            </div>
            <div class="table-responsive">
                <table id="recent-orders" class="table table-lg">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Version</th>
                        <th>Remarks</th>
                        <th>Total Services</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($operating_systems as $operating_system)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $operating_system->name }}</td>
                                <td>{{ $operating_system->version }}</td>
                                <td>{{ $operating_system->remarks }}</td>
                                <td></td>
                                <td class="text-right">
                                    <a href="{{ route('admin.operating-systems.edit', ['operating_system' => $operating_system]) }}" class="btn btn-outline-primary btn-sm btn-floating text-primary" data-toggle="tooltip" title="Edit">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.operating-systems.destroy', ['operating_system' => $operating_system]) }}" method="POST" style="display: inline-block;">
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

