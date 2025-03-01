<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'GMPC')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Teko:wght@300..700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid header-top">
        <div class="nav-shaps-2"></div>
        <div class="container d-flex align-items-center">
            <div class="d-flex align-items-center h-100">
                <a href="#" class="navbar-brand" style="height: 125px;">
                    <img src="{{ asset('img/GMPC LOGO.png') }}" alt="Logo"
                        style="max-width: 100px; max-height: 100px; padding-bottom: 10px; margin-right: 20px; object-fit: contain;">
                </a>
            </div>
            <div class="w-100 h-100">
                <div class="topbar px-0 py-2 d-none d-lg-block" style="height: 45px;">
                    <div class="row gx-0 align-items-center">
                        <div class="col-lg-8 text-center text-lg-center mb-lg-0">
                            <div class="d-flex flex-wrap">
                                <div class="pe-4">
                                    <a href="mailto:gmpc@example.com" class="text-muted small">
                                        <i class="fas fa-envelope text-primary me-2"></i>gmpc@example.com
                                    </a>
                                </div>
                                <div class="pe-0">
                                    <a href="mailto:example@gmail.com" class="text-muted small">
                                        <i class="fa fa-clock text-primary me-2"></i>Sun: 8.00 am-7.00 pm
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center text-lg-end">
                            <div class="d-flex justify-content-end">
                                {{-- <div class="d-flex align-items-center small">
                        <a href="{{ route('login.page') }}" class="login-btn text-body me-3 pe-3">
                            <span>Login</span>
                        </a>
                        <a href="{{ route('register.page') }}" class="text-body me-3">Register</a>
                    </div> --}}
                                <div class="d-flex pe-3">
                                    <a class="btn p-0 text-primary me-3"
                                        href="https://www.facebook.com/gmpcburmacamp/"><i
                                            class="fab fa-facebook-f"></i></a>
                                    {{-- <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a> --}}
                                    <a class="btn p-0 text-primary me-3"
                                        href="https://www.instagram.com/explore/locations/1017188769/garrison-methodist-presbyterian-churchfilla-chat/?hl=en"><i
                                            class="fab fa-instagram"></i></a>
                                    <a class="btn p-0 text-primary me-0"
                                        href="https://www.youtube.com/channel/UCPHN3fnS0mbc2JcxAaTNUUw"><i
                                            class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-bar px-0 py-lg-0" style="height: 80px;">
                    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end">
                        <a href="#" class="navbar-brand-2">
                            <h1 class="text-primary mb-0"><i class="fas fa-hand-rock me-2"></i> Fitness</h1>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav mx-0 mx-lg-auto">
                                <a href="#home" class="nav-item nav-link active">Home</a>
                                <a href="#about" class="nav-item nav-link">About Us</a>
                                <a href="#events" class="nav-item nav-link">Events</a>
                                <a href="#blogs" class="nav-item nav-link">Blogs</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                        <span class="dropdown-toggle">Pages</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="#features" class="dropdown-item">Featured</a>
                                        <a href="#team" class="dropdown-item">Chaplains</a>
                                        <a href="#elder" class="dropdown-item">Elders</a>
                                        <a href="#Communities" class="dropdown-item">Communities</a>
                                        <a href="#testimonial" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div>
                                <a href="#contact" class="nav-item nav-link">Contact Us</a>
                                <div class="nav-btn ps-3">
                                    <button
                                        class="btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0"
                                        data-bs-toggle="modal" data-bs-target="#searchModal">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <a href="#" class="btn btn-primary py-2 px-4 ms-0 ms-lg-3"> <span>Get
                                            Quote</span></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- Contact Section Start -->
    <div class="container-fluid testimonial bg-dark py-5" style="margin-bottom: 90px;" id="contact">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Hello There!</h4>
                <h1 class="display-4 text-white">Worship With Us</h1>
            </div>
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
                                            placeholder="Guardian Name" />
                                        <label for="gname">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="gmail"
                                            placeholder="Guardian Email" />
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

            <!-- Map Section Start -->
            <div class="bg-white rounded col-12 wow fadeInUp" data-wow-delay="0.2s" style="boder: white;">
                <div class="h-100 overflow-hidden mt-5">
                    <iframe class="w-100" style="height: 400px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10000.00000000001!2d-0.1577172!3d5.593109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9acfe0710c29%3A0xc2e94240a7ac8ee6!2sGarrison%20Methodist%20Presbyterian%20Church%2C%20Accra!5e0!3m2!1sen!2sgh!4v1630000000000!5m2!1sen!2sgh"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- Map Section End -->
        </div>
    </div>
    <!-- Contact Section End -->
    </main>

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5 mb-5 align-items-center">
                <div class="col-lg-7">
                    <div class="position-relative d-flex" style="transform: skew(18deg);">
                        <input class="form-control border-0 w-100 py-3 pe-5" type="text"
                            placeholder="Email address to Subscribe">
                        <button type="button" class="btn-primary py-2 px-4 ms-3"> <span>Subscribe</span></button>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                        <a class="btn btn-primary btn-md-square me-3"
                            href="https://www.facebook.com/gmpcburmacamp/"><i class="fab fa-facebook-f"></i></a>
                        {{-- <a class="btn btn-primary btn-md-square me-3" href="#"><i class="fab fa-twitter"></i></a> --}}
                        <a class="btn btn-primary btn-md-square me-3"
                            href="https://www.instagram.com/explore/locations/1017188769/garrison-methodist-presbyterian-churchfilla-chat/?hl=en"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-primary btn-md-square me-0"
                            href="https://www.youtube.com/channel/UCPHN3fnS0mbc2JcxAaTNUUw"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4"><i class="fas fa-hand-rock text-primary me-2"></i> GMPC</h4>
                        <p class="mb-0">Dolor amet sit justo amet elitr clita ipsum elitr est. Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="#"> Home</a>
                        <a href="#"> About us</a>
                        <a href="#"> Events</a>
                        <a href="#"> Featured Videos</a>
                        <a href="#"> Our Blog & news</a>
                        <a href="#"> Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4"> Contact Info</h4>
                        <div class="row g-2">
                            <div class="col-12">
                                <div class="d-flex">
                                    <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                    <div>
                                        <h5 class="text-white mb-2">Address</h5>
                                        <p class="mb-0">Burma Camp, Accra</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex">
                                    <i class="fas fa-envelope text-primary me-2"></i>
                                    <div>
                                        <h5 class="text-white mb-2">Mail Us</h5>
                                        <p class="mb-0">gmpc@example.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex">
                                    <i class="fa fa-phone-alt text-primary me-2"></i>
                                    <div>
                                        <h5 class="text-white mb-2">Telephone</h5>
                                        <p class="mb-0">+233 345 67890</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Recent Work</h4>
                        <div class="row g-2">
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-9.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-10.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-11.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-12.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-1.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-2.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-3.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-4.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-5.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-6.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-7.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-8.jpg') }}" class="img-fluid"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>GMPC</a> All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    Designed By <a class="border-bottom text-white" href="#">GAF - DIT</a>
                    {{-- Distributed By <a href="https://themewagon.com/">ThemeWagon</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <div class="back-to-top">
        <a href="#" class="btn"><i class="fa fa-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
