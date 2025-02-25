@extends('website.layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search Anything</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid features mb-5">
        <div class="container py-5">
            <div class="row g-4">
                <?php
                use App\Models\Event;
                $events = Event::latest()->take(4)->get();
                ?>
                @foreach ($events as $event)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="row g-4 align-items-center features-item">
                            <div class="col-4">
                                <div class="rounded-circle position-relative">
                                    <div class="overflow-hidden rounded-circle">
                                        <img src="{{ asset($event->image) }}"
                                            class="img-zoomin img-fluid rounded-circle w-100" alt=""
                                            style="width: 90px; height:73px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features-content d-flex flex-column">
                                    <a href="#" class="h6">
                                        {{ $event->body }} at {{ $event->venue }}
                                    </a>
                                    <small class="text-body d-block">
                                        {{ \Carbon\Carbon::parse($event->event_date . ' ' . $event->event_time)->format('d F, Y h:iA') }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid " style="margin-top: -100px;">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-7 col-xl-8 mt-0">
                    <?php
                    use App\Models\Banner;
                    $banners = Banner::all();
                    ?>
                    <div id="carouselExampleControls" class="carousel slide position-relative overflow-hidden rounded"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($banners as $key => $banner)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset($banner->image ?? '') }}" class="img-fluid rounded img-zoomin w-100"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 pt-0">
                        <div class="row g-4">
                            <?php
                            use App\Models\Article;
                            $articles = Article::latest()->take(5)->get();
                            ?>
                            @foreach ($articles as $article)
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-7">
                                            <div class="overflow-hidden rounded">
                                                <img src="{{ asset($article->image ?? '') }}"
                                                    class="img-zoomin img-fluid rounded w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="features-content d-flex flex-column">
                                                <a href="{{ route('article-detail', ['uuid' => $article->uuid]) }}"
                                                    class="h6">
                                                    {{ $article->title ?? '' }}</a>
                                            </div>
                                        </div>
                                        {{-- <div class="col-5">
                                            <div class="features-content d-flex flex-column">
                                                <a href="{{ route('article', ['uuid' => $article->uuid]) }}" class="h6">
                                                    {{ $article->title ?? '' }}</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- ABOUT PAGE --}}
    <div class="container-fluid py-3 my-2"
        style="background: linear-gradient(rgba(185, 224, 240, 0.87), rgba(202, 203, 185, 1)); margin-top:-100px; margin-bottom:-150px;">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">

                    <h1 class="mb-4">About NCDS Ghana</h1>
                    <p class="text-dark mb-4 pb-2">

                        The Ghana Armed Forces established the National College of Defence Studies (NCDS) in March 2023 to
                        offer Strategic Courses for senior military officers of the rank of colonels or equivalent and
                        relevant national agencies of the same status. This is based on the directive of the President of
                        the Republic of Ghana, pursuant to section 29(1) of the Education Regulatory Bodies Act 2020 (Act
                        1023). <a href="{{ route('about') }}">Read more</a>
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="rounded">
                        <img src="{{ asset('asset/img/images/ncdsSructure.svg') }}" class="img-fluid rounded w-100 rounded"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- COMMANDANT --}}

    <div class="container-fluid " style="margin-top: 0px;">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-12 col-xl-12 mt-0">



                    {{-- COMMANDANT SECTION --}}

                    <div class="bg-light p-4 rounded" style="margin-bottom: -40px;">
                        <div class="news-2">
                            <h3 class="mb-4">Commandant</h3>
                        </div>
                        <div class="row g-4 align-items-center">
                            <?php
                            use App\Models\Commandant;
                            $commandant = Commandant::latest()->first();
                            ?>
                            <div class="col-md-6">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset($commandant->image ?? '') }}"
                                        class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-column">
                                    <a href="{{ route('commandant') }}"
                                        class="h3">{{ $commandant->rank_name ?? '' }}
                                        {{ $commandant->commandant_name ?? '' }} <span class="fa fa-star checked"
                                            style="color: orange"></span>
                                        <span class="fa fa-star checked" style="color: orange"></span>
                                    </a>
                                    <p style="text-align: justify;">
                                        {{-- {{ substr($commandant->about_commandant, 0, 112 ?? '') }}
                                        @if (strlen($commandant->about_commandant ?? '') > 112)
                                            <a href="{{ route('commandant') }}">Read more</a>
                                        @endif --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    {{-- STAFF OF NCDS --}}

    <div class="container-fluid populer-news py-1" style=" margin-top:0px; margin-bottom:0px;">
        <div class="container py-5">
            <div class="tab-class mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="participants" class="border-bottom mb-4">
                            <h2 class="my-4 text-center">STAFF Of NCDS</h2>
                        </div>
                        <div class="row gallery-wrapper">
                            @php $count = 0; @endphp
                            @foreach ($staffs as $list)
                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development py-2"
                                    data-category="designing development"
                                    style="{{ $count >= 8 ? 'display:none;' : '' }}">
                                    <div class="gallery-box card">
                                        <div class="gallery-container text-center">
                                            <a class="image-popup text-center" href="{{ route('detail_staff') }}"
                                                title="">
                                                <img class="gallery-img img-fluid mx-auto text-center"
                                                    src="{{ asset($list->image) }}" alt="" />
                                                {{ $list->rank_name ?? '' }}
                                                {{ $list->staff_name }} <br>
                                                {{ $list->appointment_name ?? '' }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @php $count++; @endphp
                            @endforeach

                            <div class="text-center mt-3">
                                <button id="read-more" class="btn btn-primary" onclick="showMore()"><span
                                        style="color: white">View More</span></button>
                                <button id="read-less" class="btn btn-secondary" onclick="showLess()"
                                    style="{{ $count <= 8 ? 'display:none;' : '' }}"><span style="color: white">View
                                        Less</span></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#carouselExampleControls').carousel({
                interval: 9000 // Change slide every 9 seconds (9000 milliseconds)
            });
        });
    </script>

    <script>
        var expanded = false;

        function showMore() {
            var participantItems = document.querySelectorAll('.element-item');
            for (var i = 8; i < participantItems.length; i++) {
                participantItems[i].style.display = 'block';
            }
            document.getElementById('read-more').style.display = 'none';
            document.getElementById('read-less').style.display = 'block';
            expanded = true;
        }

        function showLess() {
            var participantItems = document.querySelectorAll('.element-item');
            for (var i = 8; i < participantItems.length; i++) {
                participantItems[i].style.display = 'none';
            }
            document.getElementById('read-more').style.display = 'block';
            document.getElementById('read-less').style.display = 'none';
            expanded = false;
        }
    </script>
@endsection
