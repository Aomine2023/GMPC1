@extends('website.layouts.master')

@section('title')
    Participants
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Participants</a></li>
            </ol>

            <!-- Participants Section -->
            <div class="container-fluid populer-news py-5">
                <div class="container py-5">
                    <div class="tab-class mb-4">
                        <div class="row g-4">
                            {{-- <div class="col-lg-8 col-xl-9">
                                <div id="participant" class="border-bottom mb-4">
                                    <h2 class="my-4">Participants of NCDS Course I</h2>
                                </div>
                                <div class="whats-carousel owl-carousel" id="participant-carousel"
                                    style="text-align: center;">
                                    @foreach ($participant as $list)
                                        <div class="latest-news-item participant-item">
                                            <div class="bg-light rounded">
                                                <div class="rounded-top overflow-hidden">
                                                    <img src="{{ asset($list->image) }}"
                                                        class="img-zoomin img-fluid rounded-top w-100" alt="">
                                                </div>
                                                <div class="d-flex flex-column p-4">
                                                    <a href="#" class="h4">{{ $list->rank_name }}
                                                        {{ $list->participant_name }}</a>
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#"
                                                            class="small text-body link-hover"><b>{{ $list->participant_course }}</b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div id="buttons" class="text-center mt-3">
                                    <button id="read-more" class="btn btn-primary" onclick="showMore()">Read More</button>
                                    <button id="read-less" class="btn btn-secondary" onclick="showLess()"
                                        style="display: none;">Read Less</button>
                                </div>
                            </div> --}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row gallery-wrapper">
                                        @foreach ($participant as $list)
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"
                                                data-category="designing development">
                                                <div class="gallery-box card">
                                                    <div class="gallery-container">
                                                        <a class="image-popup" href="#" title="">
                                                            <img class="gallery-img img-fluid mx-auto"
                                                                src="{{ asset($list->image) }}" alt="" />
                                                            {{ $list->rank_name }}
                                                            {{ $list->participant_name }} <br>
                                                            {{ $list->participant_course }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Placeholder for Additional Content -->
                            <div class="col-lg-4 col-xl-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Read More/Read Less functionality -->
    <script>
        var expanded = false;

        function showMore() {
            var participantItems = document.getElementsByClassName('participant-item');

            for (var i = 4; i < participantItems.length; i++) {
                participantItems[i].style.display = 'block';
            }
            document.getElementById('read-more').style.display = 'none';
            document.getElementById('read-less').style.display = 'block';
            expanded = true;
        }

        function showLess() {
            var participantItems = document.getElementsByClassName('participant-item');

            for (var i = 4; i < participantItems.length; i++) {
                participantItems[i].style.display = 'none';
            }
            document.getElementById('read-more').style.display = 'block';
            document.getElementById('read-less').style.display = 'none';
            expanded = false;
        }
    </script>
@endsection
