<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    
    <title>OTP | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="{{ config('app.name') }}" name="description" />
    <meta content="{{ config('app.name') }}" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="py-5 auth-page-wrapper auth-bg-cover d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="overflow-hidden auth-page-content pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="overflow-hidden card">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-6">
                                    <div class="p-4 p-lg-5 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.html" class="d-block">
                                                    <img src="assets/images/logo-light.png" alt="" height="18">
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="pb-5 text-center carousel-inner text-white-50">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15">" The theme is really great with an amazing customer support."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-4 p-lg-5">
                                        <div class="mb-4">
                                            <div class="mx-auto avatar-lg">
                                                <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                                    <i class="ri-mail-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center text-muted mx-lg-3">
                                            <h4 class="">Verify Your Email</h4>
                                            <p>Please enter the 4 digit code sent to <span class="fw-semibold">example@abc.com</span></p>
                                        </div>

                                        <div class="mt-4">
                                            <form method="POST" action="{{ route('otp.verify') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                                            <input type="text" name="digit1" class="text-center form-control form-control-lg bg-light border-light" onkeyup="moveToNext(1, event)" maxLength="1" id="digit1-input">
                                                        </div>
                                                    </div><!-- end col -->
                                                
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                                            <input type="text" name="digit2" class="text-center form-control form-control-lg bg-light border-light" onkeyup="moveToNext(2, event)" maxLength="1" id="digit2-input">
                                                        </div>
                                                    </div><!-- end col -->
                                                
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                                            <input type="text" name="digit3"class="text-center form-control form-control-lg bg-light border-light" onkeyup="moveToNext(3, event)" maxLength="1" id="digit3-input">
                                                        </div>
                                                    </div><!-- end col -->
                                                
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                                            <input type="text" name="digit4" class="text-center form-control form-control-lg bg-light border-light" onkeyup="moveToNext(4, event)" maxLength="1" id="digit4-input">
                                                        </div>
                                                    </div><!-- end col -->
        
                                                </div>
                                                <div class="mt-3">
                                                    <button type="submit" class="btn btn-success w-100">Confirm</button>

                                                </div>

                                            </form>

                                        </div>
                                        <form method="POST" action="{{ route('otp.resend') }}" id="resend-otp-form">
                                            @csrf
                                            <div class="mt-5 text-center">
                                                <p class="mb-0">Didn't receive a code ?
                                                    <button type="submit" class="p-0 m-0 align-baseline btn btn-link fw-semibold text-primary text-decoration-underline">Resend</button>
                                                </p>
                                            </div>
                                        </form>
                                        
                                        
                                        
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
         <!-- footer -->
       <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy;
                            <script>document.write(new Date().getFullYear())</script> TGR AFRICA. Crafted<i class="mdi mdi-heart text-danger"></i> by Wantect Solution
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
    <script>
        function moveToNext(currentInput, nextInputId) {
            const maxLength = currentInput.getAttribute("maxlength");
            if (currentInput.value.length === maxLength) {
                document.getElementById(nextInputId).focus();
            }
        }

        function combineOtp() {
            const inputs = document.querySelectorAll('.otp-input');
            const otpCode = Array.from(inputs).map(input => input.value).join('');
            document.getElementById('otp_code').value = otpCode;
        }
    </script>
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('assets/libs/particles.js/particles.js') }}"></script>
    <!-- particles app js -->
    <script src="{{ asset('assets/js/pages/particles.app.js') }}"></script>
    <!-- password-addon init -->
    <script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>

    <!-- two-step-verification js -->
    <script src="{{ asset('assets/js/pages/two-step-verification.init.js') }}"></script>

</body>

</html>