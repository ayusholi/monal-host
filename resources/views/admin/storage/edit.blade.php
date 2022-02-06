@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Storages</h3>
                <div>
                    <a href="{{ route('admin.storages.index') }}" class="btn btn-primary">
                        List Storages
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-0">Update Storage</h6>
                    </div>
                    <div class="container my-3">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('admin.storages.update', 'storage' => $storage) }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Storage" value="{{ $storage->name }}">
                                        <small id="emailHelp" class="form-text text-muted">Example: [250 GB SSD]</small>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="totalStorage">Total Storage</label>
                                        <input type="text" name="total_storage" class="form-control" id="totalStorage" placeholder="Enter Total Storage" value="{{ $storage->total_storage }}">
                                        @error('total_storage')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="storageType">Storage Type</label>
                                        <input type="text" name="storage_type" class="form-control" id="storageType" value="{{ $storage->storage_type }}">
                                        @error('storage_type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price (in Rs.)</label>
                                        <input type="text" name="price" class="form-control" id="price" value="{{ $storage->price }}">
                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
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

