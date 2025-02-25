@extends('website.layouts.master')
@section('title')
    Gallery
@endsection

@section('content')
    <div class="container-fluid py-5">
        <div class="container ">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Gallery</a></li>
            </ol>
    
        </div>
    </div>
    <div class="row g-4">
        <div class="col-lg-12">
            <div class="container">
                <div class="mb-4">
                    <h3 style="font-weight: bold;">Images of Maiden Study Tour, 2024</h3>
                </div>
                <div class="row" style=" padding-bottom: 70px;">
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/t1/t10.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/t1/t2.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/t1/t3.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/t1/t4.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/t1/t5.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/t1/t6.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/t1/t7.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/t1/t8.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/t1/t9.jpeg') }}" class="img-fluid" alt="image">
                    </div>

                </div>
                <div class="mb-4" style="padding-top: 70px;">
                    <h3 style="font-weight: bold;">Images of NCDS Maiden Matriculation, 2024</h3>
                </div>
                <div class="row" style=" padding-bottom: 70px;">
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/Matriculation/1DSC_2128.JPG') }}" class="img-fluid"
                            alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/Matriculation/4DSC_2265.JPG') }}" class="img-fluid"
                            alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/Matriculation/5DSC_2392.JPG') }}" class="img-fluid"
                            alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/Matriculation/6DSC_2400.JPG') }}" class="img-fluid"
                            alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/Matriculation/DSC_2044 - Copy.JPG') }}" class="img-fluid"
                            alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/Matriculation/DSC_2360.JPG') }}" class="img-fluid"
                            alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/Matriculation/1DSC_2128.JPG') }}" class="img-fluid"
                            alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/Matriculation/4DSC_2265.JPG') }}" class="img-fluid"
                            alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/Matriculation/6DSC_2400.JPG') }}" class="img-fluid"
                            alt="image">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
