@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
            <h3>CMS</h3>
                <div>
                    <a href="{{ route('admin.cms.create') }}" class="btn btn-primary">
                        Create CMS
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">All CMS</h6>
            </div>
            <div class="table-responsive">
                <table id="recent-orders" class="table table-lg">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Key</th>
                        <th>Title</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($cmses as $cms)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $cms->key }}</td>
                                <td>{{ $cms->title }}</td>
                                <td class="text-right">
                                    <a href="{{ route('admin.cms.edit', ['cm' => $cms]) }}" class="btn btn-outline-primary btn-sm btn-floating text-primary" data-toggle="tooltip" title="Edit">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.cms.destroy', ['cm' => $cms]) }}" method="POST" style="display: inline-block;">
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

