<!-- resources/views/website/layouts/about.blade.php -->

@extends('website.layouts.gmpc.master')

@section('content')
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/about1.jpg') }}" alt="About Image"
                         style="object-fit: cover; max-height: 400px; max-width: 100%;" />
                    <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
                         style="width: 200px; height: 200px">
                        <div class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3">
                            <h1 class="text-white mb-0">67</h1>
                            <h2 class="text-white">Years</h2>
                            <h5 class="text-white mb-0">In Christ</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h3 class="display-8 mb-4">Upcoming Programs</h3>
                    <p class="fs-5 text-primary mb-4">
                        The GMPC family. Church isn't for perfect people. It's for hurting people, for hungry
                        people, for growing people. It doesn't matter your background, your race, your ethnicity,
                        your lifestyle, or what you've been through. You are welcome here. This is one of the
                        avenues members converge to fellowship during the week.
                    </p>
                    <h3 class="display-8 mb-4">Prayer Meetings</h3>
                    <p class="fs-5 text-primary mb-4">
                        The GMPC family meets every Friday evening to commit family and loved ones into the hands of
                        God. This is one of the avenues members converge to fellowship during the week.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection