@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>{{ $customer->full_name }}</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0 ml-4">{{ $user_service->service->name}}</h6>
            </div>
            {{-- {{dd($customer)}} --}}

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('admin.update.service.credential', ['customer_id' => $customer->id, 'user_service_id' => $user_service->id]) }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="credentials">Credentials</label>
                                <textarea name="credentials" id="credentials" cols="30" rows="10" class="form-control">{{ $user_service->credentials }}</textarea>
                                @error('credential')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ./ Content -->

@endsection

