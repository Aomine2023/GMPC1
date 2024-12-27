<div class="container-fluid sticky-top px-0">
    <div class="container-fluid topbar bg-dark d-none d-lg-block" style="background-color: #200769;">
        <div class="container px-0">
            <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                <div class="top-info flex-grow-0">
                    <span class="rounded-circle btn-sm-square bg-primary me-2">
                        <i class="fas fa-bolt text-white"></i>
                    </span>
                    <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                        <p class="mb-0 text-white fs-6 fw-normal">Events</p>
                    </div>
                    <div class="overflow-hidden" style="width: 735px;">
                        <div id="note" class="ps-2">
                            <img src="{{ asset('asset/img/images/logoncds.jpeg') }}"
                                class="img-fluid rounded-circle border border-3 border-primary me-2"
                                style="width: 30px; height: 30px;" alt="">
                            <a href="#">
                                <p class="text-white mb-0 link-hover">National College of Defence Studies Conducts
                                    Maiden Study Tour</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="top-link flex-lg-wrap">
                    <i class="fas fa-calendar-alt text-white border-end border-secondary pe-2 me-2"> <span
                            class="text-body"></span></i>
                    {{-- <div class="d-flex icon">
                        <p class="mb-0 text-white me-2">Follow Us:</p>
                        <a href="" class="me-2"><i class="fab fa-facebook-f text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-twitter text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>



                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div style="width: auto; background-color: #ffc107;">
        <div class="container-fluid" style="background-color: #ffc107;">
            <div class="container px-0" style="color: #ffc107;">
                <nav class="navbar navbar-light navbar-expand-xl" style="background-color: #ffc107;">
                    <a href="{{ url('/') }}" class="navbar-brand mt-3">
                        <img src="{{ asset('asset/img/images/logoncds.jpeg') }}" alt="Logo"
                            style="height: 70px; width:70px">
                        <!-- <p class="text-primary display-6 mb-2" style="line-height: 0;">NCDS</p> -->
                        <!-- <small class="text-body fw-normal" style="letter-spacing: 12px;">GHANA</small> -->
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse"
                        style="border-radius: 40px; text-transform:uppercase; font-weight:bold;">
                        <div class="navbar-nav mx-auto border-top">
                            <a href="{{ url('/') }}" class="nav-item nav-link"
                                style="text-transform:uppercase; font-weight:bold; ">Home</a>
                            <a href="{{ route('Courses') }}" class="nav-item nav-link"
                                style="text-transform:uppercase; font-weight:bold; ">Courses</a>
                            <a href="{{ route('admission') }}" class="nav-item nav-link"
                                style="text-transform:uppercase; font-weight:bold; ">Admission</a>
                            <a href="{{ route('participant') }}" class="nav-item nav-link"
                                style="text-transform:uppercase; font-weight:bold; ">Participants</a>
                            <a href="{{ route('articles') }}" class="nav-item nav-link"
                                style="text-transform:uppercase; font-weight:bold; ">Articles</a>
                            <a href="{{ route('gallery') }}" class="nav-item nav-link"
                                style="text-transform:uppercase; font-weight:bold; ">Gallery</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    style="text-transform:uppercase; font-weight:bold; ">About</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="{{ route('about') }}" class="dropdown-item"
                                        style="text-transform:uppercase; font-weight:bold; ">About
                                        Us</a>
                                    <a href="{{ route('contact') }}" class="dropdown-item"
                                        style="text-transform:uppercase; font-weight:bold; ">Contact</a>
                                    <a href="{{ route('join') }}" class="dropdown-item"
                                        style="text-transform:uppercase; font-weight:bold; ">Join
                                        Us</a>
                                    <a href="#" class="dropdown-item"
                                        style="text-transform:uppercase; font-weight:bold; ">Events</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<style>
    .navbarCollapse a.active {
        color: #f4b328;
    }
</style>

<script>
    document.querySelectorAll('.navbarCollapse a').forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active');
        }
    });
</script>
