@extends('website.layouts.master')

@section('title')
    Staff_details
@endsection

@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Staff_Details</a></li>
            </ol>
            <div id="about" class="about">
                <div class="container">
                    @foreach ($staffs as $list)
                        <div class="row" style=" padding-bottom:90px;" >
                            <div class="col-xl-4" style="margin-left: -60px; margin-right:30px; text-align:justify;">
                                <div class="about-box">
                                    <img src="{{ asset($list->image) }}"
                                        style="width: 500px; margin-right:0px; padding-right:90px;" alt="">
                                    <br>
                                    <h2 class="text-center"><strong>{{ $list->appointment_name }}</strong></h2>
                                </div>
                            </div>
                            <div class="col-xl-8" style="margin-left: 10px; text-align:justify;">
                                <div class="about-box">
                                    <p><strong class="yellow">{{ $list->rank_name }} {{ $list->staff_name }}</strong><br>
                                    <p>{{ $list->about }}</p>
                                </div>
                                <!-- <button class="button" ; onclick="myFunction()" id="myBtn">Read more</button>
        
                                <a href="about.html">Mission & Vision</a> -->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
