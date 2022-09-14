@extends('layouts.admin.app')

@section('title', 'Staff List')

@push('css_or_js')
    <script src="https://use.fontawesome.com/74721296a6.js"></script>
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title"><i
                            class="tio-filter-list"></i> Staff List
                    </h1>
                </div>
                <a href="{{route('addstaff')}}" class="btn btn-primary pull-right mr-3"><i
                        class="tio-add-circle"></i> Add Staff
                </a>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row gx-2 gx-lg-3">
            <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
                <!-- Card -->
                <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                        <div class="flex-start">
                            <h5 class="card-header-title">Staffs Table</h5>
                            <h5 class="card-header-title text-primary mx-1">({{ $staffs->total() }})</h5>
                        </div>
                        <div>
                            <form action="{{url()->current()}}" method="GET">
                                <div class="input-group">
                                    <input id="datatableSearch_" type="search" name="search"
                                           class="form-control"
                                           placeholder="Search" aria-label="Search"
                                           value="" required autocomplete="off">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text"><i class="tio-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <div class="table-responsive datatable-custom">
                        <table
                            class="table table-bordered table-thead-bordered table-nowrap table-align-middle card-table">
                            <thead class="thead-light">
                            <tr>
                                <th>#NO</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>DOB</th>
                                <th>Role</th>
                                <th>Address</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Profile</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="set-rows">
                            @foreach($staffs as $key=>$staff)
                                <tr>
                                    <td>{{$staffs->firstitem()+$key}}</td>
                                    <td>
                                        {{$staff['name']}}
                                    </td>
                                    <td>
                                        {{$staff['mobile']}}
                                    </td>
                                    <td>
                                        {{$staff['email']}}
                                    </td>
                                    <td>
                                        {{$staff['dob']}}
                                    </td>
                                    <td>
                                        {{$staff['role']}}
                                    </td>
                                    <td>
                                        {{$staff['address']}}
                                    </td>
                                    <td>
                                        {{$staff['state']}}
                                    </td>
                                    <td>
                                        {{$staff['country']}}
                                    </td>
                                    <td>
                                        @if($staff->photo)
                                           <img src="{{asset('public/'.$staff->photo)}}" height="50" width="50">
                                        @endif
                                        </td>
                                    <td>
                                        <a class="btn-sm btn-secondary p-1 pr-2 m-1"
                                           href="{{route('editStaff',[$staff->id])}}">
                                            <i class="fa fa-pencil pl-1" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn-sm btn-secondary p-1 pr-2 m-1"
                                           href="{{route('destroyStaff',[$staff->id])}}">
                                            <i class="fa fa-trash pl-1" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="page-area">
                            <table>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
@endsection

@push('script_2')

@endpush
