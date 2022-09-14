@extends('layouts.admin.app')

@section('title', 'Add New Staff')

@push('css_or_js')

@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title"><i
                            class="tio-add-circle-outlined"></i> Add New Staff</h1>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row gx-2 gx-lg-3">
            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2 card card-body">
                <form action="{{route('storeStaff')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="input-label"
                                       for="exampleFormControlInput1">Name</label>
                                <input type="text" name="name" class="form-control" 
                                       placeholder="First Name"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="input-label"
                                       for="exampleFormControlInput1">Mobile Number</label>
                                <input type="number" name="mobile" class="form-control" value=""
                                       placeholder="Mobile Number"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="input-label"
                                       for="exampleFormControlInput1">Email</label>
                                <input type="email" name="email" class="form-control" value=""
                                       placeholder="Email"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="input-label"
                                       for="exampleFormControlInput1">DOB</label>
                                <input type="date" name="dob" class="form-control" value=""
                                       placeholder="Date Of Birth"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="input-label"
                                       for="exampleFormControlInput1">Role</label>
                                <input type="text" name="role" class="form-control" value=""
                                       placeholder="Role"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="input-label"
                                       for="exampleFormControlInput1">Address</label>
                                <input type="text" name="address" class="form-control" value=""
                                       placeholder="address"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="input-label"
                                       for="exampleFormControlInput1">State</label>
                                <input type="text" name="state" class="form-control" value=""
                                       placeholder="State"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="input-label"
                                       for="exampleFormControlInput1">Country</label>
                                <input type="text" name="country" class="form-control" value=""
                                       placeholder="Country"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Profile</label>
                                <input type="file" name="image" class="form-control" 
                                       required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" value="storeStaff">submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection