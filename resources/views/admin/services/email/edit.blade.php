@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Services</h3>
                <div>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-primary">
                        List Services
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-0">Update Service</h6>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('admin.services.update', ['service' => $service]) }}">
                                    @method('PUT')
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Service" value="{{ $service->name }}">
                                        <small class="form-text text-muted">Example: [VPS Server]</small>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="slug" value="{{ $service->slug }}">
                                        <small class="form-text text-muted">Example: [vps-server]</small>
                                        @error('slug')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="antiSpam">Anti Spam</label>
                                        <select name="anti_spam" id="antiSpam" class="form-control">
                                            <option value="1" {{ $service->emailService->anti_spam == 1 ? "selected" : null  }}>Yes</option>
                                            <option value="0" {{ $service->emailService->anti_spam == 1 ? "selected" : null  }}>No</option>
                                        </select>
                                        @error('anti_spam')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="rateLimit">Rate Limit</label>
                                        <select name="rate_limit" id="rateLimit" class="form-control">
                                            <option value="1" {{ $service->emailService->rate_limit == 1 ? "selected" : null  }}>Yes</option>
                                            <option value="0" {{ $service->emailService->rate_limit == 1 ? "selected" : null  }}>No</option>
                                        </select>
                                        @error('rate_limit')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="blacklistEmail">Blacklist Email</label>
                                        <select name="blacklist_email" id="blacklistEmail" class="form-control">
                                            <option value="1" {{ $service->emailService->blacklist_email == 1 ? "selected" : null  }}>Yes</option>
                                            <option value="0" {{ $service->emailService->blacklist_email == 0 ? "selected" : null  }}>No</option>
                                        </select>
                                        @error('blacklist_email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="feature">Feature</label>
                                        <textarea name="feature" id="" cols="30" rows="10" class="feature">{{ o$service->emailService->feature }}</textarea>
                                        @error('feature')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="interval">Interval</label>
                                        <input type="number" name="interval" class="form-control" id="interval" placeholder="Enter Interval" value="{{ $service->interval }}">
                                        @error('interval')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="intervalType">Interval Type</label>
                                        <input type="text" name="interval_type" class="form-control" id="intervalType" placeholder="Enter Interval Type" value="{{ $service->interval_type }}">
                                        <small class="form-text text-muted">Example: [Month, Year]</small>
                                        @error('interval_type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="basePrice">Base Price (in Rs.)</label>
                                        <input type="text" name="base_price" class="form-control" id="basePrice" placeholder="Enter Base Price" value="{{ $service->base_price }}">
                                        @error('base_price')
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

