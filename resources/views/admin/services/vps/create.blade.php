@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Services</h3>
                <div>
                    <a href="{{ route('admin.vps-services.index') }}" class="btn btn-primary">
                        List Services
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-0">Create Services</h6>
                    </div>
                    <div class="container my-3">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('admin.vps-services.store') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Service" value="{{ old('name') }}">
                                        <small class="form-text text-muted">Example: [VPS Server]</small>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="slug" value="{{ old('slug') }}">
                                        <small class="form-text text-muted">Example: [vps-server]</small>
                                        @error('slug')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="ram">RAM</label>
                                        <input type="number" name="ram" class="form-control" id="ram" placeholder="Enter RAM" value="{{ old('ram') }}">
                                        @error('ram')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="ramUnit">RAM Unit</label>
                                        <input type="text" name="ram_unit" class="form-control" id="ramUnit" placeholder="Enter Ram Unit" value="{{ old('ram_unit') }}">
                                        <small class="form-text text-muted">Example: [GB, MB]</small>
                                        @error('ram_unit')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="storage">Storage</label>
                                        <input type="number" name="storage" class="form-control" id="storage" placeholder="Enter Storage" value="{{ old('storage') }}">
                                        @error('storage')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="storageUnit">Storage Unit</label>
                                        <input type="text" name="storage_unit" class="form-control" id="storageUnit" placeholder="Enter Storage Unit" value="{{ old('storage_unit') }}">
                                        <small class="form-text text-muted">Example: [GB, MB]</small>
                                        @error('storage_unit')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="storageType">Storage Type</label>
                                        <input type="text" name="storage_type" class="form-control" id="storageType" placeholder="Enter Storage Type" value="{{ old('storage_unit') }}">
                                        <small class="form-text text-muted">Example: [HD, SSD< Nvme SSD]</small>
                                        @error('storage_unit')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="cpuCores">CPU Cores</label>
                                        <input type="number" name="cpu_cores" class="form-control" id="cpuCores" placeholder="Enter CPU Cores" value="{{ old('cpu_cores') }}">
                                        @error('cpu_cores')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="interval">Interval</label>
                                        <input type="number" name="interval" class="form-control" id="interval" placeholder="Enter Interval" value="{{ old('inteval') }}">
                                        @error('interval')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="intervalType">Interval Type</label>
                                        <input type="text" name="interval_type" class="form-control" id="intervalType" placeholder="Enter Interval Type" value="{{ old('interval_type') }}">
                                        <small class="form-text text-muted">Example: [Month, Year]</small>
                                        @error('interval_type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="basePrice">Base Price (in Rs.)</label>
                                        <input type="text" name="base_price" class="form-control" id="basePrice" placeholder="Enter Base Price" value="{{ old('base_price') }}">
                                        @error('base_price')
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

