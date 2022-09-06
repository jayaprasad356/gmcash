@extends('layouts.admin.app')

@section('title', 'Client List')

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
                            class="tio-filter-list"></i> Client List
                    </h1>
                </div>
                <a href="{{route('add')}}" class="btn btn-primary pull-right mr-3"><i
                        class="tio-add-circle"></i> Add Client
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
                            <h5 class="card-header-title">Client Table</h5>
                            <h5 class="card-header-title text-primary mx-1">({{ $clients->total() }})</h5>
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
                            class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                            <thead class="thead-light">
                            <tr>
                                <th>#NO</th>
                                <th>First Name</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Platform</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                            </tr>
                            </thead>
                            <tbody id="set-rows">
                            @foreach($clients as $key=>$client)
                                <tr>
                                    <td>{{$clients->firstitem()+$key}}</td>
                                    <td>
                                        {{$client['name']}}
                                    </td>
                                    <td>
                                        {{$client['mobile']}}
                                    </td>
                                    <td>
                                        {{$client['email']}}
                                    </td>
                                    <td>
                                        {{$client['platform']}}
                                    </td>
                                    <td>
                                        {{$client['address']}}
                                    </td>
                                    <td>
                                        {{$client['city']}}
                                    </td>
                                    <td>
                                        {{$client['state']}}
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
