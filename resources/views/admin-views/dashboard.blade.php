@extends('layouts.admin.app')
@section('title', 'Dashboard')
@push('css_or_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .grid-card {
            border: 2px solid #00000012;
            border-radius: 10px;
            padding: 10px;
        }

        .label_1 {
            position: absolute;
            font-size: 10px;
            background: #FF4C29;
            color: #ffffff;
            width: 146px;
            padding: 2px;
            font-weight: bold;
            border-radius: 6px;
            text-align: center;
        }

        .center-div {
            text-align: center;
            border-radius: 6px;
            padding: 6px;
            border: 2px solid #8080805e;
        }
    </style>
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header"
             style="padding-bottom: 0!important;border-bottom: 0!important;margin-bottom: 1.25rem!important;">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Welcome
                        , JP</h1>
                    <p>welcome to GM Cash</p>
                </div>
                <div class="col-sm mb-2 mb-sm-0" style="height: 25px">
                    <label class="badge badge-soft-success float-right">
                     Software Version
                    </label>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Card -->
        <div class="card card-body mb-3 mb-lg-5">
            <div class="gx-2 gx-lg-3 mb-2">
                <div class="flex-between">
                    <h4>Greymatter Statistics</h4>
                    <h4><i style="font-size: 30px" class="tio-money-vs pr-1"></i></h4>
                </div>
            </div>
            <div class="row gx-2 gx-lg-3" id="order_stats">
                @include('admin-views.partials._stats',['allcount'=>$allcount])
            </div>
        </div>
        <!-- End Card -->



        @endsection
