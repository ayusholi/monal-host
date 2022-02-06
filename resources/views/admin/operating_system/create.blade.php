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
                        <h6 class="card-title mb-0">Create Operating System</h6>
                    </div>
                    <div class="container my-3">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('admin.operating-systems.store') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter region" value="{{ old('name') }}">
                                        <small id="emailHelp" class="form-text text-muted">Example: [Ubuntu]</small>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="version">Version</label>
                                        <input type="text" name="version" class="form-control" id="version" placeholder="Enter Version" value="{{ old('version') }}">
                                        @error('version')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="remarks">Remarks</label>
                                        <input type="text" name="remarks" class="form-control" id="remarks" value="{{ old('remarks') }}">
                                        @error('remarks')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create</button>
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

