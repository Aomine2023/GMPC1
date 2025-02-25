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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Teko:wght@300..700&display=swap" rel="stylesheet">

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
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                        <a class="btn p-0 text-primary me-3" href="https://www.facebook.com/gmpcburmacamp/"><i class="fab fa-facebook-f"></i></a>
                        {{-- <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a> --}}
                        <a class="btn p-0 text-primary me-3" href="https://www.instagram.com/explore/locations/1017188769/garrison-methodist-presbyterian-churchfilla-chat/?hl=en"><i class="fab fa-instagram"></i></a>
                        <a class="btn p-0 text-primary me-0" href="https://www.youtube.com/channel/UCPHN3fnS0mbc2JcxAaTNUUw"><i class="fab fa-youtube"></i></a>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <a href="course.html" class="nav-item nav-link">Events</a>
                    <a href="blog.html" class="nav-item nav-link">Blogs</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Pages</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="team.html" class="dropdown-item">Our team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    <div class="nav-btn ps-3">
                        <button class="btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="fas fa-search"></i>
                        </button>
                        <a href="#" class="btn btn-primary py-2 px-4 ms-0 ms-lg-3"> <span>Get Quote</span></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
        </div>
    </div>
    <!-- Navbar & Hero End -->