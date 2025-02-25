@extends('website.layouts.master')

@section('title')
    Join
@endsection

@section('content')

<!-- Admission Start -->
<div class="container-fluid py-5">
            <div class="container py-5">
                <ol class="breadcrumb justify-content-start mb-4">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Admission</a></li>
                </ol>
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="mb-4">
                           <h3 style="font-weight: bold;">Admission</h3>
                        </div>
                        <p class="my-4" style="text-align: justify;"> Participation is by recommendation by 
                        the Ghana Armed Forces for persons of the rank of Colonel and above, and officers of 
                        equivalent rank from other Security agencies or persons from Governmental and 
                        Corporate Organisations with the Status of a Director and above, and recommended 
                        or nominated by their respective organisations.
                        </p>   
                    </div>
                </div>
            </div>
        </div>
        <!-- Admission End -->

@endsection
