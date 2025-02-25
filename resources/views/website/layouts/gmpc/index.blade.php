    <!-- About Start -->
    @extends('website.layouts.gmpc.master')
    @section('content')
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px">
                            <img class="position-absolute w-100 h-100" src="img/about1.jpg" alt=""
                                style="object-fit: cover" />
                            <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
                                style="width: 200px; height: 200px">
                                <div
                                    class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3">
                                    <h1 class="text-white mb-0">67</h1>
                                    <h2 class="text-white">Years</h2>
                                    <h5 class="text-white mb-0">In Christ</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h3 class="display-8 mb-6">
                                Upcoming Programs
                            </h3>
                            <p class="fs-5 text-primary mb-4">
                                The GMPC family. Church isn't for perfect people. It's for hurting people, for hungry
                                people, for growing people. It doesn't matter your background, your race, your ethnicity,
                                your lifestyle, or what you've been through. You are welcome here. This is one of the
                                avenues members converge to fellowship during the week.
                            </p>
                            <h3 class="display-8 mb-6">
                                Prayer Meetings
                            </h3>
                            <p class="fs-5 text-primary mb-4">
                                The GMPC family meets every Friday evening to commit family and loved ones into the hands of
                                God. This is one of the avenues members converge to fellowship during the week.
                            </p>
                        </div>
                    </div>

                    <div class="border-top mt-4 pt-4">
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
            <!-- Facts Start -->
            <div class="container-fluid overflow-hidden my-5 px-lg-0">
                <div class="container facts px-lg-0">
                    <div class="row g-0 mx-lg-0">
                        <div class="col facts-text wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 px-4 ps-lg-0">
                                <h1 class="text-white mb-4">History Of GMPC</h1>
                                <p class="text-light mb-5">
                                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                                    sed stet lorem sit clita duo justo magna dolore erat amet
                                </p>
                                <a href="" class="align-self-start btn btn-secondary py-3 px-5">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 500px">
                    <h1 class="display-6 mb-5">
                        Join Our Communities
                    </h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($community as $list)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded h-100 p-5">
                                <div class="d-flex align-items-center ms-n5 mb-4">
                                    <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                    </div>
                                    <h4 class="mb-0">{{ $list->title }}</h4>
                                </div>
                                <p class="mb-4">
                                  {{ \Illuminate\Support\Str::words($list->body, 100, '...') }}
                                </p>
                                <a class="btn btn-light px-3" href="">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->

        <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">

                        <section class="dark-bg no-bottom-padding">
                            <div class="container">
                                <div class="main-video-wrap fl-wrap">
                                    <div class="video-main-cont">
                                        <div class="video-section-title fl-wrap">
                                            <h2>Featured Video</h2>
                                            <h4>Stay up-to-date</h4>
                                            <a href="https://www.youtube.com/@officialgaftv" target="_blank" view=""
                                                all="" <i="" class="fas fa-caret-right"></a>
                                        </div>
                                        <a class="video-holder vh-main fl-wrap  image-popup" style="height:500px"
                                            href="https://www.youtube.com/embed/https://www.youtube.com/watch?v=vhu7JP7doSU">
                                            <iframe width="100%" height="500"
                                                src="https://www.youtube.com/embed/https://www.youtube.com/watch?v=vhu7JP7doSU">
                                            </iframe>
                                        </a>

                                    </div>

                                    <!-- video-links-wrap   -->
                                    <div class="video-links-wrap ps ps--active-y">
                                        <!-- video-item  -->
                                        <div class="video-item fl-wrap" data-url="javascript:void(0)"
                                            data-video-link="https://www.youtube.com/watch?v=K-6tPkm6cZA">
                                            <iframe width="100%" height="300"
                                                src="https://www.youtube.com/embed/1pQFgf2n-Nc">
                                            </iframe>
                                            <div class="video-item-title">
                                                <h4>Defence Minister Cuts Sod for Infrastructural Development Projects at
                                                    Military Training Schools.</h4>
                                                <span class="video-date"><i class="far fa-clock"></i>
                                                    <strong>Jul 31 2023</strong></span>
                                            </div>
                                        </div>
                                        <div class="video-item fl-wrap" data-url="javascript:void(0)"
                                            data-video-link="https://www.youtube.com/watch?v=K-6tPkm6cZA">
                                            <iframe width="100%" height="300"
                                                src="https://www.youtube.com/embed/QG957ewLYlE">
                                            </iframe>
                                            <div class="video-item-title">
                                                <h4>CAS Sees Off 12 Ab Initio and 4 Certified Instructor Pilots to Train in
                                                    USA.</h4>
                                                <span class="video-date"><i class="far fa-clock"></i>
                                                    <strong>Jun 19 2023</strong></span>
                                            </div>
                                        </div>
                                        <div class="video-item fl-wrap" data-url="javascript:void(0)"
                                            data-video-link="https://www.youtube.com/watch?v=K-6tPkm6cZA">
                                            <iframe width="100%" height="300"
                                                src="https://www.youtube.com/embed/z96Or3b_Vlo">
                                            </iframe>
                                            <div class="video-item-title">
                                                <h4>AVM FAK Bekoe Appointed Chief of the Air Staff.</h4>
                                                <span class="video-date"><i class="far fa-clock"></i>
                                                    <strong>Jun 19 2023</strong></span>
                                            </div>
                                        </div>
                                        <div class="video-item fl-wrap" data-url="javascript:void(0)"
                                            data-video-link="https://www.youtube.com/watch?v=K-6tPkm6cZA">
                                            <iframe width="100%" height="300"
                                                src="https://www.youtube.com/embed/vhu7JP7doSU">
                                            </iframe>
                                            <div class="video-item-title">
                                                <h4>BURIAL SERVICE FOR THE LATE AIR COMMODORE GODFRIED SACKEY PARKER</h4>
                                                <span class="video-date"><i class="far fa-clock"></i>
                                                    <strong>Feb 12 2024</strong></span>
                                            </div>
                                        </div>
                                        <!--video-item end   -->
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; height: 516px; right: 0px;">
                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 211px;">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- video-links-wrap end   -->
                                </div>
                            </div>


                        </section>



                    </div>

                </div>
            </div>
        </div>
        <!-- Appointment End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 500px">
                    <h1 class="display-6 mb-5">Meet Our Chaplains</h1>
                </div>
               @foreach ($participant as $list)
                  <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <img class="img-fluid" src="{{ asset($list->image) }}" alt="" />
                            <div class="text-center p-4">
                                <h5>{{ $list->rank_name }}.{{ $list->participant_name }}</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-text text-center bg-white p-4">
                               <h5>{{ $list->rank_name }}.{{ $list->participant_name }}</h5>
                                <p>Designation</p>
                                {{-- <div class="d-flex justify-content-center">
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light m-1"
                                        href="https://www.facebook.com/gmpcburmacamp/"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
        <!-- Team End -->

        <!-- Appointment Start -->
        <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-white mb-5">
                            Worship With Us
                        </h1>
                        <p class="text-white mb-5">
                            At Garrison Methodist Preby Church, we believe your best days are still out in front of you.
                            Whether you are joining us in person or online, we invite you to experience our services and be
                            a part of the GMPC family. The Bible says when you are planted in the house of the Lord, you
                            will flourish. Get ready to step into a new level of your destiny!
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
        <!-- Appointment End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto" style="max-width: 500px">
                    <h1 class="display-6 mb-5">Meet Our Elders</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <img class="img-fluid" src="img/team-1.jpg" alt="" />
                            <div class="text-center p-4">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-text text-center bg-white p-4">
                                <h5>Full Name</h5>
                                <p>Designation</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light m-1"
                                        href="https://www.facebook.com/gmpcburmacamp/"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <img class="img-fluid" src="img/team-2.jpg" alt="" />
                            <div class="text-center p-4">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-text text-center bg-white p-4">
                                <h5>Full Name</h5>
                                <p>Designation</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded">
                            <img class="img-fluid" src="img/team-3.jpg" alt="" />
                            <div class="text-center p-4">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-text text-center bg-white p-4">
                                <h5>Full Name</h5>
                                <p>Designation</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded">
                            <img class="img-fluid" src="img/team-4.jpg" alt="" />
                            <div class="text-center p-4">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-text text-center bg-white p-4">
                                <h5>Full Name</h5>
                                <p>Designation</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square btn-light m-1" href=""><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
    @endsection
