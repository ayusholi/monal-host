@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Regions</h3>
                <div>
                    <a href="{{ route('admin.regions.index') }}" class="btn btn-primary">
                        List Regions
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-0">Create Regions</h6>
                    </div>
                    <div class="container my-3">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('admin.regions.store') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter region" value="{{ old('name') }}">
                                        <small class="form-text text-muted">Example: [Asia-Pacific, Europe]</small>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Enter latitude" value="{{ old('latitude') }}">
                                        @error('latitude')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="longitude">Longitude</label>
                                        <input type="text" name="longitude" class="form-control" id="name" placeholder="Enter longitude" value="{{ old('longitude') }}">
                                        @error('longitude')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price (in Rs.)</label>
                                        <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price" value="{{ old('price') }}">
                                        @error('price')
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

