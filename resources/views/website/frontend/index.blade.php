@include('website.frontend.header')
<main>
    @yield('content')

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                                class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


<!-- Carousel Start -->
<div class="header-carousel owl-carousel overflow-hidden bg-dark">
    @foreach ($banners as $banner)
        <div class="header-carousel-item hero-section">
            <div class="hero-bg-half-1" style="background-image: url('{{ asset('storage/' . $banner->image) }}');"></div> <!-- Set the background image -->
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To</h4>
                                <h1 class="display-1 text-white mb-4">Garrison Methodist Presbyterian Church</h1>
                                <p class="mb-5 fs-5">Welcome to Garrison Methodist Presbyterian Church</p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-dark py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
                                    <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-content h-100">
                        <h4 class="text-primary">Upcoming Programs</h4>
                        <h1 class="display-4 text-white mb-4">We are the best at fulfilling your potential and
                            achieving your goals</h1>
                        <p class="mb-4">The GMPC family. Church isn't for perfect people. It's for hurting people,
                            for hungry
                            people, for growing people. It doesn't matter your background, your race, your ethnicity,
                            your lifestyle, or what you've been through. You are welcome here. This is one of the
                            avenues members converge to fellowship during the week.</p>
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
                                            <div class="d-flex align-items-center border-top border-bottom py-4">
                                                <h4 class="text-primary">Prayer Meetings</h4>
                                                <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the industry's standard
                                                    dummy text ever since the 1500s, when an unknown printer took a
                                                    galley of type and scrambled it to make a type specimen book. It has
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center border-top border-bottom py-4">
                                                <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the industry's standard
                                                    dummy text ever since the 1500s, when an unknown printer took a
                                                    galley of type and scrambled it to make a type specimen book. It has
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center border-top border-bottom py-4">
                                                <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the industry's standard
                                                    dummy text ever since the 1500s, when an unknown printer took a
                                                    galley of type and scrambled it to make a type specimen book. It has
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <a href="#" class="btn btn-primary py-3 px-5"> <span>Make Appointment</span></a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-shrink-0 ps-4">
                                    <a href="#" class="btn btn-light btn-lg-square position-relative wow tada"
                                        data-wow-delay=".9s">
                                        <i class="fa fa-phone-alt fa-2x"></i>
                                        <div class="position-absolute" style="top: 5px; right: 5px;">
                                            <span><i class="fa fa-comment-dots text-dark"></i></span>
                                        </div>
                                    </a>
                                    <div class="d-flex flex-column ms-3">
                                        <span>Call Us On</span>
                                        <a href="tel:+ 0123 456 7890"><span class="text-white">+233 345 67890</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-img h-100">
                        <div class="about-img-inner d-flex h-100">
                            <img src="img/GMPC LOGO.png" class="img-fluid"
                                style="max-width: 100%; height: auto; object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- Fitness Goal Start -->
<div class="container-fluid goal pt-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="goal-content">
                    <h4 class="text-primary">History Of GMPC</h4>
                    <h5 class="display-4 mb-4">
                        @foreach($history as $item)
                            <strong>{{ $item->title }}</strong><br>
                            <span>{{ $item->description }}</span><br><br>
                        @endforeach
                    </h5>
                    <!-- Additional content (optional) -->
                    <div class="ms-1">
                        <a href="#" class="btn btn-primary py-3 px-5 ms-2">
                            <span>Read Details</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="h-100">
                    <img src="img/monstrance.png" class="img-fluid h-100" style="object-fit: cover;" alt="Monstrance">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fitness Goal End -->

<!-- Features Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-4 mb-4">Join Our Communities</h1>
        </div>
        <div class="feature-carousel owl-carousel">
            @foreach ($communities as $community) <!-- Loop through the communities -->
                <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-img">
                        <img src="{{ asset($community->image) }}" class="img-fluid w-100" alt="{{ $community->title }}">
                    </div>
                    <div class="feature-content p-4">
                        <h4 class="mb-3">{{ $community->title }}</h4>
                        <p class="mb-4">{{ Str::limit($community->body, 100) }}</p> <!-- Limiting the text for display -->
                        {{-- <a href="{{ route('community.show', $community->uuid) }}" class="btn btn-primary py-2 px-4"> <span>Read More</span></a> --}}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="feature-shaps"></div>
    </div>
</div>
<!-- Features End -->


<!-- Courses Start -->
<div class="container-fluid courses overflow-hidden py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-4 text-white mb-4">Meet Our Chaplains</h1>
        </div>
        <div class="row gy-4 gx-0 justify-content-center">
            @foreach($chaplains as $chaplain)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="courses-item">
                        <div class="courses-item-inner p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="courses-icon-img p-3">
                                    <img src="{{ $chaplain->image ?? 'img/default.png' }}" class="img-fluid" alt="{{ $chaplain->chaplain_name }}">
                                </div>
                                <div class="data-info d-flex flex-column">
                                    {{-- <div class="courses-trainer d-flex align-items-center mb-1">
                                        <div class="me-2" style="width: 25px; height: 25px;">
                                            <img src="{{ $chaplain->image ?? 'img/default.png' }}" class="img-fluid" alt="{{ $chaplain->chaplain_name }}">
                                        </div>
                                        <p class="mb-0">{{ $chaplain->chaplain_name }}</p>
                                    </div> --}}
                                    
                                </div>
                            </div>
                            <a href="#" class="d-inline-block h4 mb-3">{{ $chaplain->title }}</a>
                             <h3 class="mb-0">{{ $chaplain->chaplain_name }}</h3>
                             <div class="courses-date">
                                        <p class="mb-1">Designation: {{ $chaplain->designation }}</p>
                                    </div>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="#" class="btn btn-primary py-3 px-5"> <span>More</span></a>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary"> Featured Videos</h4>
                <h1 class="display-4 mb-4">Check out our latest stories</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="blog-carousel owl-carousel">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img p-4 pb-0">
                        <a href="#">
                            <img src="img/feature-4.jpg" class="img-fluid w-100" alt="">
                        </a>
                    </div>
                    <div class="blog-content p-4">
                        <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                            <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                            <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Full Body Home Workout</a>
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                            impedit eligendi? Quibusdam, laudantium.</p>
                        <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-img p-4 pb-0">
                        <a href="#">
                            <img src="img/feature-3.jpg" class="img-fluid w-100" alt="">
                        </a>
                    </div>
                    <div class="blog-content p-4">
                        <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                            <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                            <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">31-Day Fitness Calendar</a>
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                            impedit eligendi? Quibusdam, laudantium.</p>
                        <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog-item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-img p-4 pb-0">
                        <a href="#">
                            <img src="img/feature-2.jpg" class="img-fluid w-100" alt="">
                        </a>
                    </div>
                    <div class="blog-content p-4">
                        <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                            <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                            <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">At Home Ab Workout</a>
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                            impedit eligendi? Quibusdam, laudantium.</p>
                        <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img p-4 pb-0">
                        <a href="#">
                            <img src="img/feature-1.jpg" class="img-fluid w-100" alt="">
                        </a>
                    </div>
                    <div class="blog-content p-4">
                        <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                            <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                            <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Full Body Home Workout</a>
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                            impedit eligendi? Quibusdam, laudantium.</p>
                        <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Explore Fitness Start -->
    <div class="container-fluid explore py-5 wow zoomIn" data-wow-delay="0.2s">
        <div class="container py-5 text-center">
            <h1 class="display-1 text-white mb-0"> Explore Our Featured Viedeos</h1>
            <a class="btn btn-primary py-3 px-4 px-md-5 me-2" href="https://www.youtube.com/channel/UCPHN3fnS0mbc2JcxAaTNUUw"><i
                    class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
        </div>
    </div>
    <!-- Explore Fitness End -->


<!-- Team Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-4 mb-4">Meet Our Elders</h1>
        </div>
        <div class="row gy-5 gy-lg-4 gx-4">
            @foreach($elders as $elder)
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset($elder->image) }}" class="img-fluid" alt="{{ $elder->elder_name }}">
                            <div class="team-icon">
                                <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>{{ $elder->elder_name }}</h4>
                            <p class="mb-0">{{ $elder->designation }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial bg-dark py-5" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Hello There!</h4>
                <h1 class="display-4 text-white">Worship With Us</h1>
            </div>
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                        <p class="text-white mb-5">
                            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                            stet lorem sit clita duo justo magna dolore erat amet. Tempor erat
                            elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                            clita duo justo magna.
                        </p>
                        <div class="bg-white rounded p-3">
                            <div class="d-flex align-items-center bg-primary rounded p-3">
                                <h5 class="text-white mb-0">Call Us: +233 345 6789</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-white rounded p-5">
                            <form>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="gname"
                                                placeholder="Gurdian Name" />
                                            <label for="gname">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="gmail"
                                                placeholder="Gurdian Email" />
                                            <label for="gmail">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="cname"
                                                placeholder="Child Name" />
                                            <label for="cname">Your Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="cage"
                                                placeholder="Child Age" />
                                            <label for="cage">Occupation</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary py-3 px-5" type="submit">
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
    </div>
    <!-- Testimonial End -->


   </main>

@include('website.frontend.footer')