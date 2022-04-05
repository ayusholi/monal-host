@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
            <h3>FAQ</h3>
                <div>
                    <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">
                        Create FAQ
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">All FAQs</h6>
            </div>
            <div class="table-responsive">
                <table id="recent-orders" class="table table-lg">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Title</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($faqs as $faq)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $faq->title }}</td>
                                <td class="text-right">
                                    <a href="{{ route('admin.faqs.edit', ['faq' => $faq]) }}" class="btn btn-outline-primary btn-sm btn-floating text-primary" data-toggle="tooltip" title="Edit">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.faqs.destroy', ['faq' => $faq]) }}" method="POST" style="display: inline-block;">
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

