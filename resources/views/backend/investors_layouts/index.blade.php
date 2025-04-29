@extends('backend.investors_layouts.master')
@section('title')
    DASHBOARD
@endsection
@section('content')
<div class="container-fluid">

    <style>
        .marquee-container {
            background-color: #e35b5b;
            color: white;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            overflow: hidden;
            position: relative;
            white-space: nowrap;
        }
    
        .marquee-text {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 25s linear infinite; 
        }
    
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        .card-hover:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }

    /* Card 1 - Warning (Yellow/Orange) */
    .card-warning {
        background-color: #fff3cd; /* Light warning */
        border: 1px solid #ffc107;
    }
    .card-warning:hover {
        background-color: #ffe69c;
    }

    /* Card 2 - Navy Blue */
    .card-navy {
        background-color: #e7f0ff;
        border: 1px solid #001f3f;
    }
    .card-navy:hover {
        background-color: #b3d1ff;
    }

    /* Card 3 - Green */
    .card-green {
        background-color: #d1f7d6;
        border: 1px solid #198754;
    }
    .card-green:hover {
        background-color: #b6eabf;
    }
    </style>
    
    <div class="row">
        <div class="col-12">
            <!-- Marquee Banner -->
            <div class="marquee-container">
                <span class="marquee-text">
                    Welcome, {{ Auth::guard('investor')->user()->name }}! to Investors Community Platform. Welcome to our investors! Your support makes us thrive.
                </span>
            </div>
    
            <!-- Page Title Box -->
            <div class="mt-3 page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Investor Dashboard</h4>
                <div class="page-title-right">
                    <ol class="m-0 breadcrumb">
                        <!-- Breadcrumbs can be added here -->
                    </ol>
                </div>
            </div>
        </div>
    </div>
    

    <div class="row">
      
        <div class="order-first col-xxl-12 order-xxl-0">
            <div class="d-flex flex-column h-100">
                <div class="row h-100">
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-warning card-hover">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <span class="avatar-title bg-light text-warning rounded-circle fs-3">
                                            <i class="align-middle ri-money-dollar-circle-fill"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="mb-1 text-uppercase fw-semibold fs-12 text-muted"> Total Invested</p>
                                        <h4 class="mb-0 ">$<span class="counter-value" data-target="2390.68">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge badge-soft-success"><i class="align-middle ri-arrow-up-s-fill me-1"></i>6.24 %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-navy card-hover">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                            <i class="align-middle ri-arrow-up-circle-fill"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="mb-1 text-uppercase fw-semibold fs-12 text-muted"> Total Change</p>
                                        <h4 class="mb-0 ">$<span class="counter-value" data-target="19523.25">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge badge-soft-success"><i class="align-middle ri-arrow-up-s-fill me-1"></i>3.67 %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-green card-hover">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <span class="avatar-title bg-light text-success rounded-circle fs-3">
                                            <i class="align-middle ri-arrow-down-circle-fill"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="mb-1 text-uppercase fw-semibold fs-12 text-muted">Day Change</p>
                                        <h4 class="mb-0 ">$<span class="counter-value" data-target="14799.44">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge badge-soft-danger"><i class="align-middle ri-arrow-down-s-fill me-1"></i>4.80 %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div><!-- end row -->

               
                
                <div class="row">

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0 card-title">Basic Line Chart</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="line_chart_basic" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0 card-title">Updating Donut Chart</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div>
                                    <div id="updating_donut_chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]' class="apex-charts" dir="ltr"></div>

                                    <div class="flex-wrap gap-2 mt-4 d-flex align-items-start justify-content-center">
                                        <button id="add" class="btn btn-light btn-sm">
                                            + ADD
                                        </button>

                                        <button id="remove" class="btn btn-light btn-sm">
                                            - REMOVE
                                        </button>

                                        <button id="randomize" class="btn btn-light btn-sm">
                                            RANDOMIZE
                                        </button>

                                        <button id="reset" class="btn btn-light btn-sm">
                                            RESET
                                        </button>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0 card-title">Grouped Bar Chart</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="grouped_bar" data-colors='["--vz-primary", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0 card-title">Bar with Markers</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="bar_markers" data-colors='["--vz-success", "--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end row -->
                <!-- end row -->
            </div>
        </div><!-- end col -->
    </div><!-- end row -->

  
   

</div>
 <!-- apexcharts -->
 <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

 <!-- piecharts init -->
 <script src="{{ asset('assets/js/pages/apexcharts-pie.init.js') }}"></script>

 
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
  <!-- barcharts init -->
  <script src="{{ asset('assets/js/pages/apexcharts-bar.init.js') }}"></script>

    <!-- linecharts init -->
    <script src="{{ asset('assets/js/pages/apexcharts-line.init.js') }}"></script>
@endsection
