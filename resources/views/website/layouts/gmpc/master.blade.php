<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>GMPC Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/assets/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+233 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>gmpc@example.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-clock me-2"></small>
                    <small>Sundays - 0900 to 1200 HRS</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="text-white-50 ms-4" href="https://www.facebook.com/gmpcburmacamp/"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-4" href="https://www.youtube.com/channel/UCPHN3fnS0mbc2JcxAaTNUUw"><i
                            class="fab fa-youtube"></i></a>
                    <!-- <a class="text-white-50 ms-4" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a> -->
                    <a class="text-white-50 ms-4"
                        href="https://www.instagram.com/explore/locations/1017188769/garrison-methodist-presbyterian-churchfilla-chat/?hl=en"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('website.layouts.gmpc.header')
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">

        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach ($banner as $banners)
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset($banners->image) }}" alt="Image" />
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <h1 class="display-6 text-light mb-4 animated slideInDown welcome-message">
                                            {{ $banners->title }}
                                        </h1>
                                        <p class="smaLl-text"> </p>
                  <h3 class="display-8 text-light mb-4 animated slideInDown welcome-message">
                  We Exist To Honour God And Make Disciples
                  </h3>
               
                <a href="" class="btn btn-primary py-3 px-5">More Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>

@endforeach

    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#header-carousel"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#header-carousel"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- Carousel End -->

    <style>
        .welcome-message {
            position: relative;
            color: white;
            /* Base color */
            text-shadow:
                -1px -1px 0 #000,
                1px -1px 0 #000,
                -1px 1px 0 #000,
                1px 1px 0 #000;
            /* Stroke effect */
        }

        small-text {
            color: ffffff;
        }

        .fs-5.text-body {
            color: rgba(255, 255, 255, 0.7);
            /* Lightened text */
        }
    </style>

    @yield('content')
    <!-- Footer Start -->
    @include('website.layouts.gmpc.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>
