@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>CMS</h3>
                <div>
                    <a href="{{ route('admin.cms.index') }}" class="btn btn-primary">
                        List CMS
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-0">Create CMS</h6>
                    </div>
                    <div class="container my-3">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('admin.cms.store') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="key">Key</label>
                                        <input type="text" name="key" class="form-control" id="key" placeholder="Eg: about_us" value="{{ old('key') }}">
                                        @error('key')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Eg: About Us" value="{{ old('title') }}">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body') }}</textarea>
                                        @error('body')
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

