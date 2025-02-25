@extends('website.layouts.master')
@section('title')
    Commandant
@endsection
@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">About</a></li>
                <li class="breadcrumb-item active text-dark">Commander NCDS</li>
            </ol>
            <?php
            use App\Models\Commandant;
            $commandant = Commandant::latest()->first();
            ?>
            <div id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4" style="margin-left: -60px; margin-right:30px; text-align:justify;">
                            <div class="about-box">
                                <img src="{{ asset($commandant->image) }}"
                                    style="width: 500px; margin-right:0px; padding-right:90px;" alt="">
                                <br>
                                <h2>COMMANDANT<strong class="yellow"> NCDS</strong></h2>
                            </div>
                        </div>
                        <div class="col-xl-8" style="margin-left: 10px; text-align:justify;">
                            <div class="about-box">
                                <p><strong class="yellow">{{ $commandant->rank_name }}
                                        {{ $commandant->commandant_name }}</strong>
                                        (<span class="fa fa-star checked"
                                        style="color: orange"></span>
                                    <span class="fa fa-star checked" style="color: orange"></span>)<br>
                                <p>{{ $commandant->about_commandant }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
