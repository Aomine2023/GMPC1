@include('website.frontend.header')
@section('content')
<div class="container-fluid about pt-5" id="about">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-content h-100">
                    <h4 class="text-primary">Upcoming Programs</h4>
                    <h1 class="display-4 text-white mb-4">We are the best at fulfilling your potential and achieving your goals</h1>
                    <div class="tab-class pb-4">
                        <ul class="nav d-flex mb-2">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 active" data-bs-toggle="pill" href="#tab-1">
                                    <span style="width: 150px;">Programmes</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 mx-3" data-bs-toggle="pill" href="#tab-2">
                                    <span style="width: 150px;">Meetings</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2" data-bs-toggle="pill" href="#tab-3">
                                    <span style="width: 150px;">About Us</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        @if ($latestEvent) <!-- Check if $latestEvent is defined -->
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <h4 class="text-primary">{{ $latestEvent->body }}</h4>
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">
                                                Date: {{ $latestEvent->event_date }} at {{ $latestEvent->event_time }}<br>
                                                Venue: {{ $latestEvent->venue }}<br>
                                                @if ($latestEvent->image)
                                                    <img src="{{ asset($latestEvent->image) }}" alt="Event Image" style="max-width:100px; height:auto;">
                                                @else
                                                    <span>No Image Available</span>
                                                @endif
                                            </p>
                                            <a href="{{ route('upcoming-programs') }}" class="btn btn-primary ms-3">View More</a>
                                        </div>
                                        @else
                                        <p>No upcoming events available.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">Details about meetings will go here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">Information about us will go here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-img h-100">
                    <div class="about-img-inner d-flex h-100">
                        <img src="img/GMPC LOGO.png" class="img-fluid" style="max-width: 100%; height: auto; object-fit: contain;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('website.frontend.footer')