@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Operating Systems</h3>
                <div>
                    <a href="{{ route('admin.operating-systems.index') }}" class="btn btn-primary">
                        List Operating Systems
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-0">Update Operating System</h6>
                    </div>
                    <div class="container my-3">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('admin.operating-systems.update', ['operating_system' => $operating_system]) }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter region" value="{{ $operating_system->name }}">
                                        <small id="emailHelp" class="form-text text-muted">Example: [Ubuntu]</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="version">Version</label>
                                        <input type="text" name="version" class="form-control" id="version" placeholder="Enter Version" value="{{ $operating_system->version }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="remarks">Remarks</label>
                                        <input type="text" name="remarks" class="form-control" id="remarks" value="{{ $operating_system->remarks }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ./ Content -->

@endsection

