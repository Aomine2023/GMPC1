@extends('website.layouts.master')

@section('title')
    Participants
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Participants</a></li>
            </ol>
            <!-- Participants Section -->
            <div class="container-fluid populer-news py-5">
                <div class="container py-5">
                    <div class="tab-class mb-4">
                        <div class="row g-4">

                            <div id="participant" class="border-bottom mb-4">
                                <h2 class="">Participants of NCDS Course I</h2>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row gallery-wrapper text-center ">
                                        @php $count = 0; @endphp
                                        @foreach ($participant as $list)
                                            <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development py-2"
                                                data-category="designing development"
                                                style="{{ $count >= 8 ? 'display:none;' : '' }}">
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
                                            @php $count++; @endphp
                                        @endforeach
                                        <div class="text-center mt-3 text-center ">
                                            <button id="read-more" class="btn btn-primary text-center"
                                                onclick="showMore()"><span style="color: white">View
                                                More</span></button>
                                            <button id="read-less" class="btn btn-secondary" onclick="showLess()"
                                                style="{{ $count <= 8 ? 'display:none;' : '' }}"><span style="color: white">View Less</span></button>
                                        </div>
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

    <!-- Read More/Read Less Buttons -->


    <!-- JavaScript for Read More/Read Less functionality -->
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
