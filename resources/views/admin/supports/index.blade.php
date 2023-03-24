@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>All Previous Tickets</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="timeline">
                            @foreach ($supports as $support)
                            <div class="timeline-item">
                                <div>
                                    <figure class="avatar avatar-sm mr-3 bring-forward">
                                        <span class="avatar-title bg-success-bright text-success rounded-circle"><i class="ti-headphone-alt"></i></span>
                                    </figure>
                                </div>
                                <div>
                                    <h6 class="d-flex justify-content-between mb-4">
                                        <span>
                                            <a href="#" class="link-1"></a> {{ $support->title }}
                                        </span>
                                        <span class="text-muted font-weight-normal">{{ $support->created_at }}</span>
                                    </h6>
                                    <a href="#">
                                        <div class="mb-3 border p-3 border-radius-1">
                                            <div>
                                                {{ $support->body }}
                                            </div>
                                            <span><i>- By {{ $support->user->full_name }} ({{ $support->user->email }})</i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ./ Content -->

@endsection

