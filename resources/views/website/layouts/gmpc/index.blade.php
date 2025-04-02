    <!-- About Start -->
    @extends('website.layouts.gmpc.master')
    @section('content')
    <style>
        .list-group-item {
    background: #f8f9fa;
    border-left: 5px solid #007bff;
    padding: 15px;
    margin-bottom: 10px;
    border-radius: 5px;
}

    </style>
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="pt-5 overflow-hidden rounded position-relative ps-5 h-100" style="min-height: 400px">
                            <img class="position-absolute w-100 h-100" src="img/about1.jpg" alt=""
                                style="object-fit: cover" />
                            <div class="top-0 pb-3 bg-white rounded position-absolute start-0 pe-3"
                                style="width: 200px; height: 200px">
                                <div
                                    class="p-3 text-center rounded d-flex flex-column justify-content-center bg-primary h-100">
                                    <h1 class="mb-0 text-white">67</h1>
                                    <h2 class="text-white">Years</h2>
                                    <h5 class="mb-0 text-white">In Christ</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h3 class="mb-6 display-8">Upcoming Programs</h3>
                            @if($events->count())
                                <ul class="list-group">
                                    @foreach($events as $event)
                                        <li class="list-group-item d-flex align-items-center">
                                            <!-- Event Image Section (side-by-side) -->
                                            <div class="event-image" style="flex-shrink: 0; max-width: 200px;">
                                                @if ($event->image)
                                                    <img src="{{ asset($event->image) }}" alt="Event Image"
                                                         style="width: 100%; height: auto;">
                                                @else
                                                    <p class="text-muted">No Image Available</p>
                                                @endif
                                            </div>
                    
                                            <!-- Event Details Section -->
                                            <div class="event-details" style="margin-left: 20px; flex-grow: 1;">
                                                <h5 class="mb-1 text-dark">{{ $event->body }}</h5>
                                                <p class="mb-0"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</p>
                                                <p class="mb-0"><strong>Time:</strong> {{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}</p>
                                                <p class="mb-0"><strong>Venue:</strong> {{ $event->venue }}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">No upcoming events at the moment.</p>
                            @endif
                        </div>
                    </div>
                    
                    

                    <div class="pt-4 mt-4 border-top">
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
            <div class="my-5 overflow-hidden container-fluid px-lg-0">
                <div class="container facts px-lg-0">
                    <div class="row g-0 mx-lg-0">
                        <div class="col facts-text wow fadeIn" data-wow-delay="0.1s">
                            <div class="px-4 h-100 ps-lg-0">
                                <h1 class="mb-4 text-white">History Of GMPC</h1>
                                <p class="mb-5 text-light">
                                    @if($history->isNotEmpty())
                                        {{ $history->first()->short_content }}
                                    @else
                                        No history available.
                                    @endif
                                </p>
                                <a href="#" class="px-5 py-3 align-self-start btn btn-secondary">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        <!-- Service Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto text-center" style="max-width: 500px">
                    <h1 class="mb-5 display-6">
                        Join Our Communities
                    </h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($community as $list)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="p-5 rounded service-item h-100">
                                <div class="mb-4 d-flex align-items-center ms-n5">
                                    <div class="flex-shrink-0 service-icon bg-primary rounded-end me-4">
                                    </div>
                                    <h4 class="mb-0">{{ $list->title }}</h4>
                                </div>
                                <p class="mb-4">
                                  {{ \Illuminate\Support\Str::words($list->body, 100, '...') }}
                                </p>
                                <a class="px-3 btn btn-light" href="">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->

        <div class="py-5 my-5 container-fluid appointment wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <section class="dark-bg no-bottom-padding">
                            <div class="container">
                                <div class="main-video-wrap fl-wrap">
                                    <!-- video-links-wrap -->
                                    <div class="flex-row overflow-auto video-links-wrap d-flex flex-nowrap" style="gap: 15px;">
                                        @foreach($church_sermons_vidoes as $video)
                                        @php
                                            // Extract video ID from the saved URL
                                            preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $video->sermon_vidoe_link, $matches);
                                            $videoId = $matches[1] ?? null;
                                        @endphp
                                    
                                        @if($videoId)
                                            <div class="video-item fl-wrap" style="width: 250px; flex-shrink: 0;">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal{{ $loop->index }}">
                                                    <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg" alt="{{ $video->sermon_title }}" width="100%">
                                                </a>
                                                <div class="video-item-title">
                                                    <h6>{{ $video->sermon_title }}</h6>
                                                    <span class="video-date">
                                                        <i class="far fa-clock"></i> <strong>{{ \Carbon\Carbon::parse($video->sermon_date)->format('M d Y') }}</strong>
                                                    </span>
                                                </div>
                                            </div>
                                    
                                            <!-- Bootstrap Modal -->
                                            <div class="modal fade" id="videoModal{{ $loop->index }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">{{ $video->sermon_title }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $videoId }}?autoplay=1" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                    <!-- video-links-wrap end -->
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto text-center" style="max-width: 500px">
                    <h1 class="mb-5 display-6">Meet Our Chaplains</h1>
                </div>
               @foreach ($chaplains as $list)
                  <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded team-item">
                            <img class="img-fluid" src="{{ asset($list->image) }}" alt="" />
                            <div class="p-4 text-center">
                                <h5>{{ $list->title }}.{{ $list->chaplain_name }}</h5>
                                <span>Designation:{{ $list->designation}}</span>
                            </div>
                            <div class="p-4 text-center bg-white team-text">
                                <h5>{{ $list->designation}}</h5>
                                <p>Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
        <!-- Team End -->
        <!-- Appointment Start -->
        <div class="py-5 my-5 container-fluid appointment wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="mb-5 text-white display-6">
                            Worship With Us
                        </h1>
                        <p class="mb-5 text-white">
                            At Garrison Methodist Preby Church, we believe your best days are still out in front of you.
                            Whether you are joining us in person or online, we invite you to experience our services and be
                            a part of the GMPC family. The Bible says when you are planted in the house of the Lord, you
                            will flourish. Get ready to step into a new level of your destiny!
                        </p>
                        <div class="p-3 bg-white rounded">
                            <div class="p-3 rounded d-flex align-items-center bg-primary">
                                <h5 class="mb-0 text-white">Call Us: +233 345 6789</h5>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-5 bg-white rounded">
                            <form action="{{ route('site-store-contact-us') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="gname" name="full_name"
                                                placeholder="Gurdian Name" />
                                                @error('full_name')
                                                   <span class="text-danger">{{ $message }}</span> 
                                                @enderror
                                            <label for="gname">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="gmail" name="email"
                                                placeholder="Gurdian Email" />
                                            <label for="gmail">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="cname" name="phone"
                                                placeholder="Child Name" />
                                            <label for="cname">Your Mobile</label>
                                        </div>
                                    </div>
                                  
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px" name="message"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="px-5 py-3 btn btn-primary" type="submit">
                                            Be a member
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto text-center" style="max-width: 500px">
                    <h1 class="mb-5 display-6">Meet Our Elders</h1>
                </div>
               @foreach ($chaplains as $list)
                  <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded team-item">
                            <img class="img-fluid" src="{{ asset($list->image) }}" alt="" />
                            <div class="p-4 text-center">
                                <h5>{{ $list->title }}.{{ $list->chaplain_name }}</h5>
                                <span>Designation:{{ $list->designation}}</span>
                            </div>
                            <div class="p-4 text-center bg-white team-text">
                                <h5>{{ $list->designation}}</h5>
                                <p>Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    @endsection
