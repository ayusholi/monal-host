{{-- @extends('admin.dashboard.user-master')

@section('content')
<!-- Content body -->
<div class="content-body">
    <!-- Content -->
    <div class="content">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="title" class="form-control" id="title"
                       aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('title') }}">
                <small id="emailHelp" class="form-text text-muted">Write a title on what you are facing an issue</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Ticket</button>
        </form>



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
                                            {{ $support->body }}
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
</div>
<!-- ./ Content -->
@endsection --}}


@extends('user.dashboard.user-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>Create a ticket</h3>
            </div>
        </div>

        <form method="POST" action="{{ route('support.submit') }}">
             {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                       aria-describedby="emailHelp" placeholder="Example: Issue with SSH Server" value="{{ old('title') }}">
                <small id="emailHelp" class="form-text text-muted">Write a title on what you are facing an issue</small>
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
            <button type="submit" class="btn btn-primary">Create Ticket</button>
        </form>

        <br>
        <hr>
        <br>

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
                                            {{ $support->body }}
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

