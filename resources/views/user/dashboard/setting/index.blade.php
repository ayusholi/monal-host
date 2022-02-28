@extends('user.dashboard.user-master')
@section('content')
<div class="content">
                
    <div class="page-header">
        <div class="page-title">
            <h3>User Edit</h3>
            
        </div>
    </div>

    <div class="row">
    <div class="col-md-12">

        <div class="nav nav-pills nav-fill mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-item nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Account</a>
            {{-- <a class="nav-item nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Information</a> --}}
            {{-- <a class="nav-item nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Security</a> --}}
            {{-- <a class="nav-item nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Social</a> --}}
        </div>

        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Account</h6>
                        @if(Session::has('success'))
                        <div class="alert alert-info alert-with-border" role="alert">{{Session::get('success')}}</div>
                        @endif
                        <form action="{{route('user.update',$getuser->id)}}" method="post">
                           @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" value="{{$getuser->username}}">
                                        @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control" value="{{$getuser->first_name}}">
                                        @error('first_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" name="middle_name" class="form-control" value="{{$getuser->middle_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control" value="{{$getuser->last_name}}">
                                        @error('last_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="{{$getuser->email}}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="number" name="contact_number" class="form-control" value="{{$getuser->contact_number}}">
                                        @error('contact_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <input type="text" class="form-control" value="User" disabled>
                                    </div>
                                </div>
                            </div>
                           
                            <button class="btn btn-primary">
                                <i class="ti-check mr-2"></i> Save Changes
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Change Password</h6>
                       
                        <form action="{{route('user.changepassword')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input type="password" name="old_password" class="form-control">
                                        @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" class="form-control">
                                        @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>New Password Repeat</label>
                                        <input type="password" name="new_confirm_password" class="form-control">
                                        @error('new_confirm_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary">
                                <i class="ti-check mr-2"></i> Save Changes
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Information</h6>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Birt Date</label>
                                        <input type="text" class="form-control" value="Roxana Roussell">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" value="+65195892151">
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control" value="../../../laborasyon.com/index.html">
                                    </div>
                                    <div class="form-group">
                                        <label>Languages</label>
                                        <input type="text" class="form-control" value="../../../laborasyon.com/index.html">
                                    </div>
                                    <div class="form-group">
                                        <p>Gender</p>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio3">Other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address Line 1</label>
                                        <input type="text" class="form-control" value="A-65, Belvedere Streets">
                                    </div>
                                    <div class="form-group">
                                        <label>Address Line 2</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Post Code</label>
                                        <input type="text" class="form-control" value="1868">
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" value="New York">
                                    </div>
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" value="New York">
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" value="United States">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary">
                                <i class="ti-check mr-2"></i> Save Changes
                            </button>
                        </form>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
               
            </div> --}}
            {{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Social</h6>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" value="https://twitter.com/roxana-roussell">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" value="https://www.facebook.com/roxana-roussell">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control" value="https://www.instagram.com/roxana-roussell/">
                                    </div>
                                    <div class="form-group">
                                        <label>GitHub</label>
                                        <input type="text" class="form-control" value="https://github.com/roxana-roussell">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary">
                                <i class="ti-check mr-2"></i> Save Changes
                            </button>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
     </div>

    </div>
@endsection