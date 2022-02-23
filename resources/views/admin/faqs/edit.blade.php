@extends('admin.dashboard.admin-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>FAQs</h3>
                <div>
                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-primary">
                        List FAQs
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-0">Update Faq</h6>
                    </div>
                    <div class="container my3">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('admin.faqs.update', ['faq' => $faq]) }}">
                                    @method('PUT')
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Eg: What are the services available?" value="{{ $faq->title }}">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ $faq->body }}</textarea>
                                        @error('body')
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

